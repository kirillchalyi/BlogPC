<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <!--load all styles -->
    <title>Blog</title>
  </head>
  <body> 

    <div class="contrainer">
        <div class="row" >
          <div class="col-lg-12">
            <h2 class="text-center">Comments</h2>
          </div>
          <div class="col-lg-6">
            <div id="comment-field">
              <h5>Comment</h5>
            </div>
          </div>
          <div class="col-lg-6">
            <form>
              <div class="form-group">
                <label for="comment-name">Name:</label>
                <input type="name" class="form-control" id="comment-name" placeholder="Your name">
              </div>
              <div class="form-group">
                <label for="comment-body">Comment:</label>
                <input type="name" class="form-control" id="comment-body" placeholder="Your comment">
              </div>
              <div class="form-group text-right">
                <button type="submit" id="comment-add" class="btn btn-primary">Add comment</button>
              </div>
            </form>
          </div>
        </div>
    </div>

    <script src="comment.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script scr="script.js"></script>
  </body>
</html>
