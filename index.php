<?php  

class User
{
    public $name;
    public $username;
    public $email;

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

    function set_username($username){
        $this->username = $username;
    }

    function get_username(){
        return $this->username;
    }

    function set_email($email){
        $this->email = $email;
    }

    function get_email(){
        return $this->email;
    }

     function addFriend($name){
        echo $name . ' You Added a friend <br>';
    }

    function postStatus($name){
        echo $name .' You Posted a Status <br>';
    } 
}
    $credentials = new User();
    $credentials->set_name('Aldrin');
    $credentials->set_username('Drin1');
    $credentials->set_email('serojealdrin@gmail.com');

    echo 'Name: ' . $credentials->get_name();
    echo '<br>';
    echo 'Username: ' . $credentials->get_username();
    echo '<br>';
    echo 'Email: ' . $credentials->get_email();
    echo '<br>';
    echo '<br>';

    $credentials->addFriend('Aldrin');
    echo '<br>';
    $credentials->postStatus('Aldrin');



?>