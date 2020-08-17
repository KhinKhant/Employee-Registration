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
            <form method="post" action="{{url('emp')}}">
                @csrf
           <h4 class="text-success">Edit Form<br></h4>
                 <div class="form-group">
                     <label for="name">Name</label>
                    <input type="name" class="form-control" name="name" id="name" placeholder="Enter Name">
                 </div>

                  <div class="form-group">
                     <label for="positon: ">Position</label>
                    <input type="text" class="form-control" name="roll" id="roll" placeholder="Enter Position">
                 </div>
                 
                 <div class="form-group">
                     <label for="text">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone number">
                 </div>

                 <div class="form-group">
                     <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
                 </div>

        <button type="submit" class="btn btn-primary btn-sm" class="text-success">Update</button>
        
        <button type="Reset" class="btn btn-primary btn-sm" class="text-success">Cancel</button>
        </form>
        </div>
        
    </div>
</section>
</body>
</html>