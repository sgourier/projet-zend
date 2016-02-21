<?php
namespace Application\Form;

use Zend\Captcha;
use Zend\Form\Element;
use Zend\Form\Form;

class PricesForm  extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('');

        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'text',
            'type' => 'Zend\Form\Element\Text',
            'attributes' => array(
                'placeholder' => 'Entrez le nom du prix',
                'required' => 'required',
            ),
            'options' => array(
                'label' => 'Nom du prix',
            ),
        ));

        $this->add(array(
            'name' => 'paragraph',
            'type' => 'Zend\Form\Element\Textarea',
            'attributes' => array(
                'placeholder' => 'Entrez la description du prix',
                'required' => 'required',
            ),
            'options' => array(
                'label' => 'Description du prix',
            ),
        ));

        $this->add(array(
            'name' => 'upload',
            'type' => 'file',
            'attributes' => array(
                'required' => 'required',
            ),
            'options' => array(
                'label' => 'Image du prix',
            ),
        ));

        $this->add(array(
            'name' => 'number',
            'type' => 'Zend\Form\Element\Text',
            'attributes' => array(
                'placeholder' => 'Entrez le prix en jetons',
                'required' => 'required',
            ),
            'options' => array(
                'label' => 'Coût en jeton du prix',
            ),
        ));

        $this->add(array(
            'name' => 'csrf',
            'type' => 'Zend\Form\Element\Csrf',
        ));

        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Envoyer',
                'id' => 'submitbutton',
            ),
        ));
    }
}