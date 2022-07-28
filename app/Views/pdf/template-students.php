<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Codeigniter 4 PDF Generate Tutorial</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    table th {
          background: #0c1c60 !important;
          color: #fff !important;
          border: 1px solid #ddd !important;
          line-height:15px!important;
          text-align:center!important;
          vertical-align:middle!important;

      }
      table td{line-height:15px!important; text-align:center!important;}
  </style>
</head>

<body>
  <div class="container">

    <h2>Generate PDF in Codeigniter 4 - Online Web Tutor</h2>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
        </tr>
      </thead>
      <tbody>
        <?php
            if(count($students) > 0){
                foreach($students as $index => $student){
                    ?>
                    <tr>
                        <td><?= $student->id ?></td>
                        <td><?= $student->name ?></td>
                        <td><?= $student->email ?></td>
                        <td><?= $student->mobile ?></td>
                    </tr>
                    <?php
                }
            }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>