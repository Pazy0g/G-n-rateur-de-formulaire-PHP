<?php

/**
 * Génération de formulaire
 */
class Form
{
    //Balise HTML form
    protected string $form;

    //Balise HTML fieldset
    protected string $fieldset;

    //Balise HTML input pour envoyer le formulaire
    protected string $submit;

    //Champ pour entrer le nom
    protected  $textarea1 = [];




    //* Constructeur de la classe Form

    public function __construct(string $action, string $method)
    {
        $this->form = '<form action="' . $action . '" method="' . $method . '">';
    }

    //* Setters Methods
    public function setFieldSet(string $legend)
    {
        $this->fieldset = '<fieldset><legend>' . $legend . '</legend>';
    }
    public function setTextarea(string $for, string $label, string $name, string $place1)
    {
        $this->textarea1[] = '<label for="' . $for . '">' . $label . '<input type="text" name="' . $name . '" placeholder="' . $place1 . '"></label><br><br>';
    }

    public function setSubmit(string $submit, string $label)
    {
        $this->submit = ' <br><button type="' . $submit . '" name="submit">' . $label . '';
    }
    // public function setRadio(string $radio, string $label)
    // {
    //     $this->radio[] = '<input type="radio" name="' . $radio . '" value="' . $radio . '" ' . ($this->radio == $radio ? 'checked' : '') . '>' . $label . '';
    // }


    //*Accessor Method
    public function getForm(): string
    {
        return $this->form
            . $this->fieldset
            . implode('', $this->textarea1)
            . $this->submit;
    }
}
