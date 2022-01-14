
<html lang="en">
  <head>
    <title>My PHP Calculator</title>
	
	<style>
	     body {
			 width:60%;
         display: inline-block;
         margin: 70px auto;
		 text-align: center; 
        }
		.form{
			background:grey;
			text-align:center;
			padding:3em;
			color:#3A3B3C;
		}
		.center {
        margin: auto;
         width: 60%;
          border: 3px solid green;
         padding: 5px;
          }
	</style>
  </head>
  <body>
  <div class="center">

    <form class="form">
	<h1>MY PHP Calculator</h1>
      <input type="text" name="num1" placeholder="Number 1" />
      <input type="text" name="num2" placeholder="Number 2" />
<br><br>
<p>Select Operator:</p>
      <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
      </select>
      <br />
	  <br>
      <button type="submit" name="submit" value="submit">Calculate</button>
    </form>



    <h2  align="center"  style='color:#3A3B3C;'>Calculation:</h2>
    <div class="form">
   




   <?php
	
	//Error Handling for Page & Form Is Above Complete
	
	
if(!isset($_GET['submit']))
{
	echo "Values are required";
}
elseif(isset($_GET['submit']))
{		
		echo  "Good Running Form!" . "<br>" ;		
}



	
if(!isset($_GET['num1']))
{
	echo "Values are required";
}
elseif(isset($_GET['num1']))
{
		echo "Number#1=" . $val = intval($_GET['num1']);
		if($val == 0)
		{
			echo "Please pass integer values only";
		}
		
}

if(!isset($_GET['num2']))
{
	echo "Values are required";
}
elseif(isset($_GET['num2']))
{
		echo "<br> Number#2=" . $val = intval($_GET['num2']);
		if($val == 0)
		{
			echo "Please pass integer values only";
		}
		
}

if(!isset($_GET['operator']))
{
	echo "Values are required";
}
elseif(isset($_GET['operator']))
{		echo "<br> Operator= " . $val =($_GET['operator']);
		//	echo "<br>" . "Selected Value!";		
}


	//Error Handling statement end



    echo " <h2 style='color:#3A3B3C;'>This Good Answer *.</h2>  ";
	
	
	//Switch Statement
	
if( isset($_GET["submit"])){
    $result1=$_GET['num1'];
    $result2=$_GET['num2'];
        $operator=$_GET['operator'];
        
        switch($operator){
            case "None":
                        echo "Error, kindy select one operator please";
                                      break;
            case "Add":
                     $result=Add_value($result1,$result2);     
                       echo $result;					  
                        break;

            case "Subtract":
                        $result= Sub_value($result1,$result2);
						  echo $result;
                         break;

              case "Multiply":
                        $result= Multi_value($result1,$result2);
						  echo $result;
                          break;

              case "Divide":
                           $result= Div_value($result1,$result2);
							 echo $result;
                            break;
            
            default:
                            echo "Relax";
                             break;
        }
      }
	  
	  
	  	//Switch Statement
	  
	  //Function
	  
function Add_value($value1,$value2)
{
    $result=$value1+$value2;
     return $result . "<br>";
}




function Sub_value($value1,$value2)
{
    $result=$value1-$value2;
     return $result . "<br>";
}



function Multi_value($value1,$value2)
{
	$result=$value1*$value2;
      return $result . "<br>";
	
}


function Div_value($value1,$value2)
{
	$result=$value1/$value2;
        return $result . "<br>";
	
}
	  //Function End
?>
</div>
</div>
  </body>
</html>
