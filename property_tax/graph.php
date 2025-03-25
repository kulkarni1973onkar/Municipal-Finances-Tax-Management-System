<!DOCTYPE html>
<html>
  <head>
    <title>JavaScript Bar Chart</title>
    <script src="https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js"></script>
  </head>
  <body>
    <div id="container" style="width: 100%; height: 100%"></div>


    <?php 

        $servername = "localhost:3307";
        $username = "root";
        $password="";
        $dbname="ptm";
        $conn = new mysqli($servername, $username, $password, $dbname);
        // connect end


        if (!$conn){
            die("Connection failed" .mysqli_error());
        }



    ?>



<style>
        html, body, #container {
  width: 80%;
  height: 80%;
  margin: 0;
  padding: 0;
        }
</style>
    <script>
      anychart.onDocumentReady(function() {


        <?php 
            

        for ($x = 0; $x <= 1; $x++) {
            echo "The number is: $x <br>";

            $var = "SELECT east, west, north, south from area where id= '$x' ";
            $resultQt = $conn->query($var);
            $row = mysqli_fetch_array($resultQt);
            $east = $row['east'];
            $west = $row['west'];
            $north = $row['north'];
            $south = $row['south']; 

            echo $east;

            
                
          
        
            
        // set the data
        var data = {
            header: ["Name", "Death toll"],
            rows: [
              ["East",  $east],
              ["West", $west],
              ["North", $north],
              ["South", $south],
          
        ]};
 
        // create the chart
        var chart = anychart.bar();
 
        // add the data
        chart.data(data);
 
        // set the chart title
        chart.title("The deadliest earthquakes in the XXth century");
 
        // draw
        chart.container("container");
        chart.draw();
      });

      echo "<br>";

    }

    ?>
    </script>
  </body>
</html>