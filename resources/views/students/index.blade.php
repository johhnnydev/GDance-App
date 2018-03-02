@extends('layouts.app')
@section('content')
    <div class="row align-items-center">    
        <div class="col-2">            
            <h1>Students</h1>
        </div>
        <div class="col-10">
            <input id="search" type="text" class="form-control" placeholder="Search...">
        </div>    
    </div>
    <table class="table table-hover table-striped table-responsive">
        <thead class="thead">
            <tr>
                <td><b>Name</b></td>
                <td><b>USN</b></td>
                <td><b>Gender</b></td>
                <td><b>Year and Course/Grade and Section</b></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center;" colspan="4">use the usn to search for a student</td>
            </tr>
        </tbody>
    </table>
    <div id="lalagyan"></div>
    <script>
        $("#search").keyup(function(){
            var usn = $(this).val();
            $.ajax({
                url: '/searchstudent',
                data: {
                    usn: usn
                },
                success: function(data){
                    
                    if(!$.trim(data)){
                        $('tbody').html("<tr'><td colspan='4'style='text-align: center;'>Use the usn to search for a student</td></tr>");                                             
                    }else{
                        // if you remove this if block
                        // the for loop below will display undefined
                        if(data == 0){
                            $('tbody').html("<tr'><td colspan='4'style='text-align: center;'>Use the usn to search for a student</td></tr>");
                            // exit out of the parent if block
                            return
                        }
                        // Don't remove this line.
                        $('tbody > tr').remove();
                        for (var i = 0; i < data.length; i++) {
                            $('tbody').append("<tr>" + "<td>" + "<a href=/students/"+data[i].id+">" + data[i].first_name + " " + data[i].middle_name + " " + data[i].last_name + "</a>" + "</td>" + "<td>"+ data[i].usn +"</td>" + "<td>"+ data[i].gender +"</td>"+ "<td>"+ data[i].yr_crs+"</td>"+ "</tr>");
                        }
                    }
                }
            });
        });
    </script>
@endsection