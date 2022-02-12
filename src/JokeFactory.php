<?php

namespace wsBrendonBallantyne\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris doesn’t read books. He stares them down until he gets the information he wants.',
        'Time waits for no man. Unless that man is Chuck Norris.',
        'Chuck Norris breathes air … five times a day.',
        'Chuck Norris doesn\'t sleep. He waits.',
        'Jack was nimble, Jack was quick, but Jack still couldn\'t dodge Chuck Norris\' roundhouse kick.'
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }

    public function hello()
    {
        echo 'chuck norris joke goes here';
    }
}
