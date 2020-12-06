<?php 

class HelloHandler implements Boneng\Processor\Handler {
    public function getPath() : string {
        return '/hello';
    }

    public function getMethod() : string {
        return 'GET';
    }

    public function validate(Boneng\Model\Request $request) : bool {
        return true;
    }

    public function run(Boneng\Model\Request $request) : Boneng\Model\Result {
        $params = $request->getParameters();
        $name = $params['name'];

        return new Boneng\Model\Result(200, [ 'name' => $name ]);
    }
}