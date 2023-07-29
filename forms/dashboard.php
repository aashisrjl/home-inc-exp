<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/dashboard.css">

<body>
    <div class="cover">

    
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-8 justify-content-md-center">
        <h1 id="h1"> Home income and Expences ! </h1>
        <div class="contain">
        <div class="sec-text"></div>
        </div>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card a1">
                        <div class="card-header"> Income Category </div>
                            <div class="card-body">
                                <ul>
                                    <li></li>
                                </hr>
                                    <li></li>
                                </ul>

                        
                        </div>
                    </div>

                </div>

                <div class="col-7">
                    <div class="card a2 a3">
                        <div class="card-header"> Income </div>
                            <div class="card-body">
                                <table>
                                    <thead style="font-size: 1.2em;">
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Front-end Develope</td>
                                            <td>2023 A.D</td>
                                            <td>20000</td>                                          
                                        </tr>
            
                                        <tr>
                                            <td>Content Creator</td>
                                            <td>2023 A.D</td>
                                            <td>12000</td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                               

                        
                        </div>
                    </div>

                </div>

            </div>


            <div class="row">
                <div class="col-4">
                    <div class="card a1">
                        <div class="card-header"> Expences Category </div>
                            <div class="card-body">
                                <ul>
                                    <li></li>
                                    <li></li>
                                </ul>

                        
                        </div>
                    </div>

                </div>

                <div class="col-7">
                    <div class="card a2">
                        <div class="card-header"> Expences </div>
                            <div class="card-body">
                                <table>
                                    <thead style="font-size: 1.2em;">
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Receipt</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Front-end Develope</td>
                                            <td>2023 A.D</td>
                                            <td>20000</td>  
                                            <td>1.20.300</td>                                        
                                        </tr>
            
                                        <tr>
                                            <td>Content Creator</td>
                                            <td>2023 A.D</td>
                                            <td>12000</td>
                                            <td>1.20.300</td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                               

                        
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
            
    
    
    
    
    
</body>
<script>
    const text = document.querySelector(".sec-text");
    const textLoad = () => {
        setTimeout( () => {
            text.textContent = "Developer";
        },0);

        setTimeout( () => {
            text.textContent = "Designer";
        },4000);

        setTimeout( () => {
            text.textContent = "Student";
        },8000);
        
    }
    textLoad();
    setInterval(textLoad,12000);
</script>
<script src="../js/bootstrap.min.js"></script>
</html>