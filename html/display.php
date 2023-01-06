<html>
    <head>
        <title>Read Article</title>
        <style>

body{
  background-image: url('RA1.jpg');
  
}


* {
  font-family: sans-serif; /* Change your font family */
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background: linear-gradient(
      124deg,
      #1de840,
      #1ddde8,
      #2b1de8,
      #dd00f3,
      #dd00f3
    );
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #8c32a8;
}




::-webkit-scrollbar {
  width: 10px;
}
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; }
</style>
    </head>
    <body>
    <a>
        <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}

</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</a>
</div>
     <table border="5" id="myTable" class="content-table">
       <thead>
         <tr>
             <th>Name</th>
             <th>Email</th>
             <th>Title</th>
             <th>Review</th>
         </thead>   
 <?php
 include("database2.php");
 error_reporting(0);
 $query = "SELECT * FROM write_article";
 $data = mysqli_query($conn,$query);
 $total = mysqli_num_rows($data);
 
 if($total!=0)
 {
     while($result = mysqli_fetch_assoc($data))
     {
         echo "
         <tbody>
         <tr>
         <td>".$result['Name']."</td>
         <td>".$result['Email']."</td>
         <td>".$result['Title']."</td>
         <td>".$result['Review']."</td>
         </tbody>
         ";
     }
 }
 else
 {
    echo "No record found";
 }
 ?>
 </table>
  
      
    </body>
</html>