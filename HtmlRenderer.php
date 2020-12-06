<?php

class HtmlRenderer implements Boneng\Processor\Renderer {
    public function render(Boneng\Model\Result $result) : Boneng\Model\Response {
        $template = '<h1>Boneng Example</h1>';
        $template = '<h2>Status Code: ' . $result->getStatus() . '</h2>';
        if ($result->getStatus() == 200) {
            $template .= '<h2>Hello: ' . $result->getData()['name'] . '</h2>';
        } else {
            $url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . '?path=/hello&name=John.Doe';
            $template .= '<h2>Usage:<h2>';
            $template .= '<a href="' . $url . '">' . $url . '</a>';
        }
        return new Boneng\Model\Response(200, array(), $template);
    }
}