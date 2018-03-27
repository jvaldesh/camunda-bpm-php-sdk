<?php

namespace org\camunda\php\sdk\entity\request;

class ProcessInstanceModificationRequest extends Request {

    protected $skipCustomListeners;
    protected $skipIoMappings;
    protected $instructions;
    
    public function getSkipCustomListeners() {
        return $this->skipCustomListeners;
    }

    public function getSkipIoMappings() {
        return $this->skipIoMappings;
    }

    public function getInstructions() {
        return $this->instructions;
    }

    public function setSkipCustomListeners($skipCustomListeners) {
        $this->skipCustomListeners = $skipCustomListeners;
    }

    public function setSkipIoMappings($skipIoMappings) {
        $this->skipIoMappings = $skipIoMappings;
    }

    public function setInstructions($instructions) {
        $this->instructions = $instructions;
    }

}
