<template>
        <nav class="navbar background h-nav-resp">
            <ul class="nav-list v-class-resp">
                <div class="logo"><img src="https://inertiajs.com/previews/home.png" alt="logo"></div>
                <li>
                    <NavLink href="/" :active="$page.url.endsWith('/')">
                        Home
                    </NavLink>
                </li>
                <li>
                    <Link href="/users/index" :class="{'active': $page.url.startsWith('/users/index')}">
                        Users
                    </Link>
                </li>
                <li>
                    <NavLink href="/settings" :active="$page.url.startsWith('/settings')">
                        Settings
                    </NavLink>
                </li>
                <li>
                    <NavLink href='/users/create' :active="$page.url.startsWith('/users/create')">
                        CreateUser
                    </NavLink>
                </li>
                <li>
                    <NavLink href="/logout" method="post" as="button">LogOut</NavLink>
                </li>
            </ul>
            <div class="rightnav v-class-resp">
<!--                <input type="text" name="search" id="search" placeholder="Search">-->
<!--                <button class="btn btn-sm">Search</button>-->
                Welcome , {{username}}
            </div>
            <div class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';
import NavLink from "./NavLink";
export default {
    name: "Nav",
    components: {
        Link,
        NavLink,
    },
    computed:{
        username(){
            return this.$page.props.auth.user.username;
        }
    }
}
</script>

<style scoped>

@import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Ubuntu:wght@700&display=swap");


/**{*/
/*    margin: 0px;*/
/*    padding: 0px;*/
/*}*/
*{
    font-family: 'Ubuntu Mono', monospace;
}
.logo{
    width: 20%;
    display: flex;
    justify-content: center;
    align-items: center;
}


.logo img{
    width: 42%;
    border: 3px solid rgb(245, 245, 245);
    border-radius:100px;
}

.navbar {
    display: flex;
    align-items: center;
    justify-content: center;
    position: sticky;
    top: 0;
    cursor: pointer;
}


.background{
    background:rgba(0, 0, 0, 0.7);
    background-size: cover;
    background-blend-mode: darken;
}


.nav-list{
    width: 70%;
    display: flex;
    align-items: center;
}


.nav-list li{
    list-style: none;
    padding: 31px 34px;
    font-size: 20px;
    font-family: 'Ubuntu', sans-serif;
}


.nav-list li a{
    text-decoration: none;
    color: white;
    padding: 10px;
    border-radius: 10px;
}

.nav-list li button{
    text-decoration: none;
    font-weight: bold;
    color: black;
    padding: 10px 10px;
    cursor: pointer;
}


.nav-list li a:hover{
    color: black;
    background-color: rgb(255, 255, 255);
}

.nav-list li a.active{
    color: red;
    background-color: rgb(255, 255, 255);
}


.rightnav{
    /* background-color: blue; */
    width:30%;
    text-align:right;
    padding: 0 23px;
    font-weight: bold;
    color: white;
}


#search{
    padding: 5px;
    font-size: 17px;
    border: 2px solid greenyellow;
    border-radius: 9px;
}

#btn btn-sm a{
    list-style: none;
    text-decoration: none;
    color: white;
}
.btn{
    padding: 8px 20px;
    margin: 7px 6px;
    border: 2px solid white;
    border-radius: 50px;
    background: none;
    color: white;
    cursor: pointer;
    font-family: 'Ubuntu', sans-serif;
    font-size: 16px;
}

.btn a{
    text-decoration: none;
    color: white;
}

.btn:hover{
    text-decoration: none;
    list-style: none;
    color: rgb(0, 0, 0);
    background-color:rgb(0, 255, 191);
}

.btn-dark{
    color: black;
    border: 2px solid black;
}


</style>
