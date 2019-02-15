<?php

namespace Domains\User\Guards;

use Illuminate\Auth\TokenGuard;
use Illuminate\Contracts\Auth\UserProvider;

class UserApiGuard extends TokenGuard
{
    public function __construct(UserProvider $provider)
    {
        parent::__construct($provider, request());
    }

    /**
     * @throws \Exception
     */
    public function user()
    {
        // If we've already retrieved the user for the current request we can just
        // return it back immediately. We do not want to fetch the user data on
        // every call to this method because that would be tremendously slow.
        $this->request = request();
        if (
            ! is_null($this->user)
            && $this->request->all($this->inputKey) === $this->user->{$this->inputKey}
        ) {
            return $this->user;
        }
        $user = null;
        $token = $this->getTokenForRequest();
        if (! empty($token)) {
            $user = $this->provider->retrieveByCredentials(
                [$this->storageKey => $token]
            );
            if (!is_null($user)) {
                $now = new \DateTime();
                if ($user->api_token_valid_till < $now->format('Y-m-d H:i:s')) {
                    $user = null;
                } else if(!is_null($user)) {
                    $apiTokenValidTill = new \DateTime();
                    $apiTokenValidTill->add(new \DateInterval('PT'.Config::get('auth.guards.api.expires').'M'));
                    $user->api_token_valid_till = $apiTokenValidTill->format('Y-m-d H:i:s');
                    $user->save();
                }
            }
        }
        return $this->user = $user;
    }
}