<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css"  />
  </head>
  <style>
    input[type=text], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
} 
input[type=password], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=number], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  background-color: green;
  color:red;
  font-size:30px;
}

  </style>

  <body  style="background-image: url('comfy.jpg');">
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1 style="color:yellow">Registration Form:</h1>
          </div>
          <div class="panel-body">
            <form action="ps.php" method="post"  >
              <div class="form-group">
                <label for="Nume" style="color:purple"><font size="+2.5">Nume:</label><br></font>
                <input
                  type="text"
                  class="form-control"
                  id="Nume"
                  name="Nume"
                />
              </div>
              <div class="form-group">
                <label for="Adresa" style="color:purple"><font size="+2.5">Adresa:</label></font><br>
                <input
                  type="text"
                  class="form-control"
                  id="Adresa"
                  name="Adresa"
                />
              </div>
              <div class="form-group">
                <label for="email" style="color:purple"><font size="+2.5">Email:</label><br></font>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
               <div class="form-group">
                <label for="gender" style="color:purple"><font size="+2.5">Gender:</label><br></font>
                <div>
                  <label for="male" class="radio-inline" style="color:purple"
                    ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline" style="color:purple"
                    ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline" style="color:purple"
                    ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>
               <div class="form-group">
                <label for="Item" style="color:purple"><font size="+2.5">Item:</label><br></font>
                <div>
                  <label for="Item1" class="radio-inline" style="color:purple"
                    ><input
                      type="radio"
                      name="Item"
                      value="Item1"
                      id="Item1"
                    />Item1</label
                  >
                  <label for="Item1" class="radio-inline" style="color:purple"
                    ><input
                      type="radio"
                      name="Item"
                      value="Item2"
                      id="Item2"
                    />Item2</label
                  >
                  <label for="others" class="radio-inline" style="color:purple"
                    ><input
                      type="radio"
                      name="Item" 
                      value="Item3"
                      id="Item3"
                    />Item3</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="SerieCard" style="color:purple"><font size="+2.5">Serie Card:</label><br></font>
                <input
                  type="password"
                  class="form-control"
                  id="SerieCard"
                  name="SerieCard"
                />
              </div>
              <div class="form-group">
                <label for="number" style="color:purple"><font size="+2.5">Numar Telefon:</label><br></font>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                />
              </div><br>
              <input type="submit" class="btn btn-primary" />
            </form>
        
  </body>
</html>