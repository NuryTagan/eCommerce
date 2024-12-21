<div>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>HOME PAGE</title>
        <style>
            .footer p {
                position: absolute;
                bottom: 0;
                background-color: aquamarine;
                width: 100% ;
                padding: 10px;
                text-align: center;
                    }
            
        </style>
    </head>
    <body>
        <div>
            <ul>
                <li>
                    <a href="">HOME</a>
                    <a href="">ABOUT</a>
                    <a href="">LOGIN</a>
                    <a href="">CONTACT</a>
                </li>
            </ul>
        </div>
        
        <div class="main">
            @section('link')
                   
            @show
                
            
            <h1>Home Page Heading</h1>
            <h3>Home Page sub heading</h3>
            <p>Dummy Paragraph Text for home page</p>
        </div>
        
        <div class="footer">
            <p>Footer Part</p>
        </div>
    </body>
    </html>

   
</div>
