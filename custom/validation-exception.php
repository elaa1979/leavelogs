    <?php 
    class ValidationException extends Exception
    {
        protected $message="Validation Failed";
        protected $code=422;
        protected $errors=array();

        public function __construct($errors) {
            $this->errors=$errors;
            parent::__construct($this->message, $this->code, null);            
        }
    
        // custom string representation of object
        public function __toString() {
            return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
        }
    }
    ?>