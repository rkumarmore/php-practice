<?php

use App\Creational\Prototype\Page;
use App\Structural\Composite\Army;

use App\Creational\Prototype\Author;
use App\Structural\Composite\Archer;
use App\Structural\Composite\Shooter;
use App\Structural\Composite\HTML\Form;
use App\Behavioral\COR\GUI\CORGUIClient;
// use App\Behavioral\COR\Structure\Client;
use App\Behavioral\Memento\Client;
use App\Structural\Composite\HTML\Input;
use App\Structural\Composite\HTML\Label;
use App\Structural\Adapter\WhatsAppShare;
use App\Behavioral\Strategy\Context\Order;
use App\Creational\Singleton\DBConnection;
use App\Structural\Adapter\WhatsAppAdapter;
use App\Structural\Composite\HTML\Textarea;
use App\Behavioral\Command\Website\ClientCode;
use App\Behavioral\Strategy\Strategy\PayByDcCc;
use App\Structural\Decorator\Decorators\Olives;
use App\Behavioral\Strategy\Strategy\PayByPaypal;
use App\Structural\Bridge\RemoteControlSystem\TV;
use App\Structural\Decorator\Decorators\Jalapeno;
use App\Behavioral\Observer\Observer\PhoneDisplay;
use App\Creational\Builder\Car\Builder\CarBuilder;
use App\Structural\Adapter\Notifications\slackAPI;
use App\Structural\Decorator\Components\Margherita;
use App\Structural\Decorator\Notifier\Addons\Slack;
use App\Creational\Builder\Car\Director\CarDirector;
use App\Structural\Bridge\RemoteControlSystem\Radio;
use App\Structural\Decorator\Decorators\ExtraCheese;
use App\Behavioral\Observer\Publisher\WeatherStation;
use App\Creational\Builder\Car\Engine\ElectricEngine;
use App\Structural\Bridge\RemoteControlSystem\Remote;
use App\Structural\Decorator\Notifier\Addons\Facebook;
use App\Structural\Decorator\Notifier\Components\Mail;
use App\Creational\Builder\Car\Engine\CombustionEngine;
use App\Creational\Factory\Creator\AirTransportCreator;
use App\Creational\Factory\Creator\RoadTransportCreator;
use App\Structural\Adapter\Notifications\SlackApiNotification;
use App\Structural\Decorator\RequestHandler\Addons\LogRequest;
use App\Structural\Decorator\RequestHandler\Components\Request;
use App\Creational\AbstractFactory\Furniture\Models\ModernFurniture;
use App\Creational\AbstractFactory\Furniture\Models\ArtDecoFurniture;
use App\Creational\AbstractFactory\Furniture\Models\VictorianFurniture;
use App\Structural\Decorator\RequestHandler\Addons\AuthenticateRequest;

require_once __DIR__ . "/vendor/autoload.php";

// *** Behavioral Design Patterns **** //


// function prototype()
// {
//     $author = new Author('Raj');
//     $page = new Page('Title', 'Body', $author);

//     $page->addComments('Added in INstantiation');

//     $page1 = clone $page;
//     $page1->addComments('Added in Page1');
//     $page2 = clone $page;
//     $page2->addComments('Added in Page2');

//     echo "<pre>";
//     print_r($page1);
//     echo "*********<br>********";
//     print_r($page2);
//     echo "*********<br>********";
//     print_r($page);
// }

// prototype();
class Behavioural{
    public static function CORgui(){
        $client = new CORGUIClient();
        $client->createGUI();        
    }
    public static function command(){
        $client = new ClientCode();
        $client->handle();        
    }

    public static function memnto(){
        $client = new Client();
        $client->handle();        
    }
}

Behavioural::memnto();
// Behavioural::command();
// Behavioural::CORgui();
class StructuralDecorator
{
    public static function notify($message)
    {
        // print_r($d);
        $mail = new Mail();
        $facebook = new Facebook($mail);
        $slack = new Slack($facebook);
        $slack->notify($message);

    }

    public static function request()
    {
        // print_r($d);
        $request = new Request();
        $request = new LogRequest($request);
        $request = new AuthenticateRequest($request);
        $request->process();

    }
}
// StructuralDecorator::notify("This is the Decorator Design Pattern");
// StructuralDecorator::request();

class StructuralComposite
{
    public static function army()
    {       
        $archer = new Archer();
        $shooter = new Shooter();
        
        $army1 = new Army();
        $composite = $army1->getComposite();        
        $composite->addUnit($archer);
        $composite->addUnit($shooter);
        echo "Army 1 archer and shooter were added: ";
        echo $composite->bombardStreangth();
        echo "<br>";

        $army2 = new Army();
        $composite2 = $army2->getComposite();        
        $composite2->addUnit($archer);
        echo "Army 2 Only archer was added: ";
        echo $composite2->bombardStreangth();
        echo "<br>";

        echo "Army 1: ";
        echo $composite->bombardStreangth();

        echo "<br>Army 2: ";
        echo $composite2->bombardStreangth();echo "<br>";
        echo $composite2->bombardStreangth();echo "<br>";
        echo $composite2->bombardStreangth();echo "<br>";

        $archer2 = new Archer();
        $shooter2 = new Shooter();
        $composite = $archer2->getComposite();
        $composite->addUnit($shooter2);
        $composite->addUnit($shooter2);

        // if($composite == null){
        //     $composite->addUnit($shooter2);
        //     $composite->addUnit($archer2);
        //     $composite->addUnit($archer2);
        // }else{
        //     $composite->addUnit($shooter2);
        // }


        // print($composite->bombardStreangth());

    }

    // <form>
    //   <label for="fname">First name:</label><br>
    //   <input type="text" id="fname" name="fname"><br>
    //   <label for="lname">Last name:</label><br>
    //   <input type="text" id="lname" name="lname">
    //   <textarea name="description" rows="10" cols="30">
    //      The cat was playing in the garden.
    //    </textarea>
    // </form>

    public static function  html(){
        $form   = new Form();

        $flabel = new Label();
        $flabel->setAttribute("for","fname");
        $flabel->setAttribute("value","First name:");
        $flabel->setAttribute("name","fname");
        $form->addElement($flabel);

        $fname = new Input();
        $fname->setAttribute("type","text");
        $fname->setAttribute("id","fname");
        $fname->setAttribute("name","fname"); 
        $form->addElement($fname);       
        
      
        $llabel = new Label();
        $llabel->setAttribute("for","fname");
        $llabel->setAttribute("value","Last name:");
        $llabel->setAttribute("name","fname");
        $form->addElement($llabel);
        $lname = new Input();
        $lname->setAttribute("type","text");
        $lname->setAttribute("id","lname");
        $lname->setAttribute("name","lname");  
        $form->addElement($lname);

        $textarea = new Textarea();
        $textarea->setAttribute("rows","10");
        $textarea->setAttribute("cols","30");
        $textarea->setAttribute("id","lname");
        $textarea->setAttribute("name","description"); 
        $form->addElement($textarea);

        print($form->render());    
        
    }
}

// StructuralComposite::html();
// StructuralComposite::army();
class StructuralBridge
{
    public static function remote($d)
    {
        // print_r($d);
        $d = 'App\\Structural\\Bridge\\RemoteControlSystem\\'.$d;
        $device = new $d();

        $remote = new Remote($device);

        $remote->togglePower(); echo "<br>";
        $remote->togglePower();  echo "<br>";
        $remote->togglePower();  echo "<br>";
        $remote->togglePower();  echo "<br>";
        $remote->togglePower();  echo "<br>";
        $remote->togglePower();   echo "<br>";

    }
}

// StructuralBridge::remote('TV');
// StructuralBridge::remote('Radio');

class StructuralAdapter
{
    public static function slackNotifications($title, $message)
    {
        $slack = new slackAPI('rkumar.more', 'APIKEY');
        $slack_notification = new SlackApiNotification($slack, $message);
        $slack_notification->sendMessage($message);
    }
}

// StructuralAdapter::slackNotifications('title', 'How are you?');

function builder()
{
    $elec_engine  = new ElectricEngine();
    $comb_engine  = new CombustionEngine();


    $builder = new CarBuilder();
    $director = new CarDirector();
    $director->setBuilder($builder);
    $suvCar = $director->makeSUV($elec_engine, 7);

    echo "<br>";
    print($suvCar->start());
    echo "<br>";
    print($suvCar->stop());

    echo "<br>";
    $builder = new CarBuilder();
    $director = new CarDirector();
    $director->setBuilder($builder);
    $director->makeSporstCar($comb_engine, 5);
    $sportsCar = $builder->get();

    echo "<br>";
    print($sportsCar->start());
    echo "<br>";
    print($sportsCar->stop());
}

// builder();


function abstractFactory()
{

    $modern_furniture = new ModernFurniture();
    $modern_chair = $modern_furniture->getChair();
    $modern_sofa = $modern_furniture->getSofa();
    $modern_coffeetable = $modern_furniture->getCaoffeTable();

    $artdeco_furniture = new ArtDecoFurniture();
    $artdeco_chair = $artdeco_furniture->getChair();
    $artdeco_sofa = $artdeco_furniture->getSofa();
    $artdeco_coffeetable = $artdeco_furniture->getCaoffeTable();

    $victorian_furniture = new VictorianFurniture();
    $victorian_chair = $victorian_furniture->getChair();
    $victorian_sofa = $victorian_furniture->getSofa();
    $victorian_coffeetable = $victorian_furniture->getCaoffeTable();

    print($modern_chair->hasLegs());
    print("<br>");
    print($modern_chair->sitOn());
    print("<br>");
    print($modern_sofa->hasLegs());
    print("<br>");
    print($modern_sofa->nuberOfSeats());
    print('<br>');
    print($modern_coffeetable->hasLegs());
    print('<br>');
    print($modern_coffeetable->hasTop());
    print('<br>');
    print($modern_coffeetable->hasShape());
    print('<br>');

    print($artdeco_chair->hasLegs());
    print("<br>");
    print($artdeco_chair->sitOn());
    print("<br>");
    print($artdeco_sofa->hasLegs());
    print("<br>");
    print($artdeco_sofa->nuberOfSeats());
    print('<br>');
    print($artdeco_coffeetable->hasLegs());
    print('<br>');
    print($artdeco_coffeetable->hasTop());
    print('<br>');
    print($artdeco_coffeetable->hasShape());
    print('<br>');

    print($victorian_chair->hasLegs());
    print("<br>");
    print($victorian_chair->sitOn());
    print("<br>");
    print($victorian_sofa->hasLegs());
    print("<br>");
    print($victorian_sofa->nuberOfSeats());
    print('<br>');
    print($victorian_coffeetable->hasLegs());
    print('<br>');
    print($victorian_coffeetable->hasTop());
    print('<br>');
    print($victorian_coffeetable->hasShape());
    print('<br>');
}

// abstractFactory();

function observer()
{

    $weather  = new WeatherStation();
    $iphone = new PhoneDisplay($weather, 'iPhone');
    $samsung = new PhoneDisplay($weather, 'Samsung');

    $weather->add($iphone);
    $weather->add($samsung);
    $data =  json_encode(['temp' => 43, 'humidity' => 48]);
    $weather->publish($data);

    $weather->remove($samsung);
}

// observer();


function Strategy()
{
    $paymentGateway = new PayByDcCc();
    $order = new Order();

    $order->setPaymentGateway($paymentGateway);
    $order->pay(199);

    $paymentGateway = new PayByPaypal();
    $order = new Order();

    $order->setPaymentGateway($paymentGateway);
    $order->pay(399);
}
// Strategy();

// *** Structural Design Patterns **** //


function adapter()
{
    $wa = new WhatsAppShare();
    $ad = new WhatsAppAdapter($wa, 'Hellow');
    $ad->shareData();
}
// adapter();

function decorator()
{

    $pizza = new Margherita();
    $pizzaWithCheese = new ExtraCheese($pizza);
    $pizzaWithCheeseAddedJalapeno = new Jalapeno($pizzaWithCheese);
    $pizzaWithCheeseAddedJalapenoOlived = new Olives($pizzaWithCheeseAddedJalapeno);
    echo $pizzaWithCheeseAddedJalapenoOlived->getDesc();
    echo $pizzaWithCheeseAddedJalapenoOlived->getCost();
}
// decorator();


// *** Creational Design Pattern *** //
function Factory()
{
    $airCourier = new AirTransportCreator();
    $airCourier->send();
    $roadCourier = new RoadTransportCreator();
    $roadCourier->send();
}
// Factory();

function Singleton()
{
    $db = DBConnection::getInstance();
    print_r($db);
}
// Singleton();
