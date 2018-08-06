<?php
namespace OrderApp\Core\Form\Inputs;
/**
 * Password Input Class
 */
class Password extends BaseInput implements InputInterface
{
    public $type = 'password';
    public $required = true;

    /**
     * @return string
     */
    public function getInput()
    {
        $required = $this->required ? ' required' : null;
        return "<input type=\"$this->type\" name=\"$this->name\" $required/>";
    }
}
