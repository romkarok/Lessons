<?php

class DatabaseConnection
{

  public mysqli $data_base;

  public function __construct()
  {
    $this->data_base = new mysqli("localhost", "root", "root", "City");

    if ($this->data_base->connect_error) {
      die("Connection failed: " . $this->data_base->connect_error);
    }
  }
}

class Cities extends DatabaseConnection
{
  private array $exceptions = ['.', ')', 'ы', ':', ';', '"', '\''];

  private function validate_city_name($cityName)
  {
    $count = 0;

    $array_of_charts = str_split(strrev($cityName));

    for ($i = 0; $i < count($array_of_charts); $i++) {
      if (in_array(strtolower($array_of_charts[$i]), $this->exceptions)) {
        $count += 1;
      }
    }

    if (isset($array_of_charts[$count])) {
      return $array_of_charts[$count];
    }

    throw new Error('Enter the correct word');
  }


  public function get_city_list()
  {

    $sql = "SELECT * FROM city1";
    if ($result = $this->data_base->query($sql)) {
      foreach ($result as $row) {

        $city = $row["name"];

        echo "<li>
                <span> $city </span>
            </li>";
      }
    }
  }

  private function find_city_by_last_chart($chart)
  {

    $sql = "SELECT * FROM city WHERE name Like '$chart%'";

    if ($result = $this->data_base->query($sql)) {

      foreach ($result as $row) {

        $city = $row['name'];
        return $city;

      }
    }
    return null;
  }

  private function repeat_city($city)
  {
    $result = $this->data_base->query("SELECT * FROM city1 WHERE name= '$city'");
    $num = mysqli_num_rows($result);
    if ($num === 1) {
      echo '<P><span style="color:red;">This city has already existed!</span></P>';
    } else {
      return $city;
    }
  }

  public function add_city_to_list()
  {

    if (isset($_POST['submit_button'])) {
      $city = $_REQUEST['City'];

      if (strlen($city) >= 3) {

        $helper = $this->validate_city_name($city);
        $botCity = $this->find_city_by_last_chart($helper);
        $repeat = $this->repeat_city($botCity);
        $repeat1 = $this->repeat_city($city);

        $sql = "INSERT INTO city1 (name) VALUES ('$repeat')";
        $sql1 = "INSERT INTO city1 (name) VALUES ('$repeat1')";
        $del = "DELETE FROM city WHERE name = '$repeat'" ;
        $del1 = "DELETE FROM city WHERE name = '$repeat1'";
        if ($this->data_base->query($sql1) && $this->data_base->query($sql)&& $this->data_base->query($del)&& $this->data_base->query($del1)) {
          //echo "New record created successfully";
        } else {
          echo "Error: " . $sql1 . $sql . "<br>" . $this->data_base->error;
        }

      } else {
        echo '<P><span style="color:red;">Very short city name!</span></P>';
      }
    }
  }
}