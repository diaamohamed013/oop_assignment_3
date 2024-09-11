<?php 
class Response {
    private $statusCode;
    private $headers = [];
    private $body;

    private $value;

    public function __construct($statusCode, $body, $name, $value) {
        $this->statusCode = $statusCode;
        $this->body = $body;
        $this->headers[$name] = $value;
    }

    public function setStatusCode($statusCode){
        $this->statusCode = $statusCode;
    }

    public function setBody($body){
        $this->body = $body;
    }

    public function setHeader($name,$value){
        $this->headers[$name] = $value;
    }

    public function sendResponse(){
        http_response_code($this->statusCode);
        foreach ($this->headers as $name => $value) {
            header($name.':'.$value);
        }
            echo $this->statusCode == 200 ? $this->body : "NOT FOUND";
    }

}
