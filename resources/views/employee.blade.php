<!DOCTYPE html>
<html>
<head>
    <title>
       
    </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<section>
    <div class="container">
        <div class="col-sm-6">
            <form method="post" action="{{route('employee_post')}}">
                @csrf
                 <h2>Employee Registeration</h2>
                 <div class="form-group">
                     <label for="id">ID</label>
                    <input type="id" class="form-control" name="id" id="id">
                 </div>
                
                 <div class="form-group">
                     <label for="name">Name</label>
                    <input type="name" class="form-control" name="name" id="name">
                 </div>

                  <div class="form-group">
                     <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                 </div>
                 
                 <div class="form-group">
                     <label for="date">Date of Birth</label>
                    <input type="date" class="form-control" name="date" id="date">
                 </div>

                 <div class="form-group">
                     <label for="NRC">NRC</label>
                    <input type="text" class="form-control" name="NRC" id="NRC">
                 </div>

                 <div class="form-group">
                     <label for="Nationality">Nationality</label>
                    <input type="text" class="form-control" name="Nationality" id="Nationality">
                 </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="Reset" class="btn btn-primary">Cancel</button>
        </form>
        </div>
        
    </div>
</section>
</body>
</html>