<?php

class Adder extends HttpComponent {
    public static $PATH = '/add';

    public function onRequest($con, $request, $response) {
        $query = $request->getQuery();
        $result = (string)((int)$query['a'] ?? 0) + ((int)$query['b'] ?? 0);
        $response->write($result);

        return true;
    }
}
