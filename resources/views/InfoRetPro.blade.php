<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> AdminPage</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- <link rel="stylesheet" href="truongcss.css"> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
:root{
    --main-color: #44c9e0;
    --color-dark: #1d2231;
    --text-grey:  #8390A2;
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style-type: none;
    text-decoration: none;
    font-family: 'Poppins',sans-serif;
}
.sidebar {
    width: 345px;
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    height: 100%;
    background: var(--main-color);
}
.sidebar {
    width: 345;
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    background: var(--main-color);
}
.sidebar-brand{
    height: 90px;
    padding: 1rem 0rem 1rem 2rem;
    color:#fff;
}
.sidebar-brand span{
    display: inline-block;
    padding-right: 1rem;

}
.sidebar-menu{
    margin-top: 1rem;
}
.sidebar-menu li{
    width: 100%;
    margin-bottom:1.3rem;
    padding-left:2rem;
}
.sidebar-menu a{
    padding-left: 1rem;
    display: block;
    color:#fff;
    font-size: 1.1rem;
}
.sidebar-menu a.active {
    background: #fff;
    padding-top: 1rem;
    padding-bottom: 1rem;
    color: var(--main-color);
    border-radius:30px 0px 0px 30px;
}
.sidebar-menu a span :first-child{
    font-size:1.5rem;
    padding-right: 1.1rem;
}

.main-content {
    margin-left:345px;
}
header{
    display: flex;
    justify-content: space-between;
    padding: 1rem;
    box-shadow: 2px 4px 5px rgba(0,0,0,0.2);
    position: fixed;
    left: 345px;
    right: 10px;
    width: calc(100%-345);
    top: 0;
    z-index: 100;
}
.header h4{
    color: #222;
}
.header label span{
    font-size: 1.7rem;
    padding-right: 1rem;
}
.search-wrapper {
    border: 1px solid #f0f0f0;
    border-radius: 30px;
    height: 50px;
    display: flex;
    align-items: center;
    overflow-x: hidden;
}
.search-wrapper span{
    display: inline-block;
    padding: 0rem 1rem;
    font-size: 1.5rem;
}
.search-wrapper input{
    height: 100%;
    padding: .5rem;
    border: none;
    outline: none;
}
.user-wrapper{
    display:flex;
    align-items: center;

}
.user-wrapper img{
    border-radius: 50%;
    margin-right: 1rem;
}

.user-wrapper small{
    display:inline-block;
    color:var(--text-grey);
    margin-top:-3px important;
}
.main{
    margin-top: 90px;
    padding: 2rem 1.5rem;
    background: #c1dbd800;
    min-height: calc(100vh - 90px);
}
.product_item {
    float:left;
    width:220px; /* bề rộng bao nhiêu tùy bạn */
    display:block;
 }

    </style>

</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1><span class="lab la-accusoft"></span>SHOP</h1>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href=""class="active"><span class="las la-igloo"></span>
                    <span>Trang chu</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-users"></span>
                    <span>Quan ly nguoi dung</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span>
                    <span>Quan ly dich vu</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-shipping-fast"></span>
                    <span>Quan ly giao hang</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-receipt"></span>
                    <span>Quan ly san pham</span></a><br>
                    <ul>
                        <li><a href=""><span class="las la-receipt"></span>
                             <small>Danh sach san pham</small></a></li>
                        <li><a href=""><span class="las la-receipt"></span>
                            <small>Tao san pham moi</small></a></li>
                        <li><a href=""><span class="las la-receipt"></span>
                            <small>Quan ly xuat hang</small></a></li>
                        <li><a href=""><span class="las la-receipt"></span>
                            <small>Quan ly hang tra ve</small></a></li>
                        <li><a href=""><span class="las la-receipt"></span>
                            <small>Quan ly nhap hang</small></a></li>
                    </ul>
                </li>
                <li>
                    <a href=""><span class="las la-user-circle"></span>
                    <span>Quan ly khuyen mai</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span>
                    <span>Quan ly quang cao</span></a>
                </li>
        </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h1>
                <label for="">
                <span class="las la-bars"></span>
                 </label>
                    Admin Page
            </h1>
            
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search Here"/>
            </div>
            <div class="user-wrapper">
                <img src="" width="30px" height="30px" alt="">
                <div>
                    <h4>AdminSystem</h4>
                    <small>Admin</small>
                </div>
            </div>
        </header>
        <div class="main">
            <form action="">
                <div>
                    <label for="title" >ID san pham</label>
                    <span> {{ $returnproduct->product_id}}</span>
                </div>    
                <div>
                    <label for="title" >Ma khach hang</label>
                    <span> {{ $returnproduct->customer_id}}</span>
                </div>   
                <div>
                    <label for="title" >So luong</label>
                    <span> {{ $returnproduct->quantity }}</span>
                </div>
                <div>
                    <label for="title" > Gia </label>
                    <span> {{ $returnproduct->price}}</span>
                </div>
                <div>
                    <label for="title" >Mo ta</label>
                    <span> {{ $returnproduct->description }}</span>
                </div>
                <div>
                    <label for="title" >Tu</label>
                    <span> {{ $returnproduct->from}}</span>
                </div>
                <div>
                    <label for="title" >Den</label>
                    <span> {{ $returnproduct->to}}</span>
                </div>
                <div>
                    <label for="title" >Trang thai</label>
                    <span> {{ $returnproduct->state}}</span>
                </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>