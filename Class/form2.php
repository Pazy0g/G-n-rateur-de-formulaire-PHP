<?php

require_once 'formulaire.php';
class FormFull extends Form
{
    private $radio = [];

    public function setRadio(string $name, array $options, string $selected)
    {
        foreach ($options as $value => $label) 
        {
            $check = ($value === $selected) ? ' checked' : '';
            $this->radio[] = '<input type="radio" name="' . $name . '" value="' . $value . '" ' . $check . '>' . $label;
        }
    }

    public function getForm(): string
    {
        return $this->form 
            . $this->fieldset 
            . implode('', $this->textarea1) 
            . implode('', $this->radio) 
            . $this->submit;
    }
}