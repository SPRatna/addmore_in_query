<html>
  <head>
    <title>Add More In Jquery</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
    
  </head>
  <body>
    <div class="panel panel-primary">
      <div class="panel-heading">Add Remove input fields dynamically using jQuery</div>
        <div class="panel-body">
          <button id="add_more_title" class="btn btn-sm btn-primary" style="float: right;margin-bottom: 10px;">+ Title</button>
            <table id="title_tbl" class="table table-bordered"> 
              <tbody id="disease_title">
                <tr>
                  <td><input type="text" name="title[]" class="title form-control form-control-sm" required></td>
                  <td width="10"><span class="label label-default" disabled>X</span></td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script type="text/javascript">
      $(document).ready(function(){
      //Add More Title
        var cont_id=0;
        cont_id++;
        $('#add_more_title').click(function (e){
           var new_title_row ='<tr><td><input type="text" name="title[]" class="title form-control form-control-sm" required></td><td width="10"><span type="button" name="remove" id="remove" class="label label-danger">X</span></td></tr>';
          $('#disease_title').append(new_title_row);

        $('#title_tbl').on('click', '#remove', function(){  
                $(this).closest('tr').remove(); 
            });
        });
      });
      </script>
    </body>
  </html>