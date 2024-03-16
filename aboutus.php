<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
</head>

<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
  }

  #photov{
    border-radius: 50%;
    margin-left: 15px;
  }
  #photoj{
    border-radius: 50%;
  }
  #photos{
    border-radius: 50%;
  }
  html {
    box-sizing: border-box;
  }

  *,
  *:before,
  *:after {
    box-sizing: inherit;
  }

  .column {
    float: left;
    width: 33.3%;
    margin-bottom: 16px;
    padding: 0 8px;
  }

  .card {
    margin: 8px;
  }

  .about-section {
    padding: 50px;
    text-align: center;
    background-color: #474e5d;
    color: white;
  }

  .container {
    padding: 0 16px;
  }

  .container::after,
  .row::after {
    content: "";
    clear: both;
    display: table;
  }

  .title {
    color: grey;
  }

  .button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
  }
a{
  font-size: 40px;
  text-decoration: none;
  color: black;
  margin-left: 625px;
  font-weight: bold;
}
#about{
  text-align: justify;
}
  #head{
    margin-left: 10px;
  }

  .button:hover {
    background-color: #555;
  }

  @media screen and (max-width: 650px) {
    .column {
      width: 100%;
      display: block;
    }
  }
</style>

<body>
  <a href="index.php">MartSquare</a>
  <div class="about-section">
    <h1>About Us</h1>
    <p id = "about">MartSquare is an innovative e-commerce platform that provides a seamless online shopping experience for both buyers and sellers. It's a digital marketplace where people can buy and sell products and services from the comfort of their homes, without any hassle or inconvenience.</p>
    <p id = "about">One of the primary goals of MartSquare is to simplify the buying and selling process for users. The website features a clean and intuitive design that makes it easy to navigate and find what you're looking for. The homepage includes a search bar, a list of product categories, and a selection of featured products, providing users with quick access to the most popular items on the platform. The product pages themselves are designed to provide detailed information about the product, including photos, specifications, pricing, and shipping information.</p>
    <p id = "about">MartSquare is also designed to be a safe and secure platform for online transactions. It uses the latest encryption technology to protect users' data and prevent fraud. The website also includes various payment options, including credit cards, PayPal, and other popular payment gateways, making it easy for users to complete their purchases. MartSquare also provides buyers with a hassle-free return policy, ensuring that they can shop with confidence and peace of mind.</p>
  </div>

  <h2 style="text-align:center">Our Team</h2>
  <div class="row">
    <div class="column">
      <div class="card">
        <img id="photov" src="images/Vaibhav.png" alt="Vaibhav Ganeriwala" style="width:41%">
        <div class="container">
          <h2>Vaibhav Ganeriwala</h2>
          <p class="title">Back-End Developer</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img id="photoj" src="images/Jatin.png" alt="Jatin Tayal" style="width:50%">
        <div class="container">
          <h2>Jatin Tayal</h2>
          <p class="title">Front-End Developer</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img id ="photos" src="images/Shudhanshu.png" alt="Shudhanshu Abhinav" style="width:50%">
        <div class="container">
          <h2>Shudhanshu Abhinav</h2>
          <p class="title">Database Handler</p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>