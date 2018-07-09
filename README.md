# Intranet-Interface

A user-interactive interface for browsing through Intranet.

![Intranet Content Inventory](https://axerosolutions.com/assets/custom-images/how-to-build-an-intranet/intranet-content.png "Intranet")

## Pre-requisites

Local web server, [XAMPP](https://www.apachefriends.org/download.html), for execution of [PHP](php.net/manual/en/intro-whatis.php) and [MySQL](https://www.mysql.com/) database files.

## Execution

1. Clone or download the repository to the *htdocs* folder of your local web server.

      `git clone git@github.com:raoniz/Intranet-Interface.git`
      
2. Start **Apache** and **MySQL** service in the *XAMPP Control Panel*.
3. Goto **'localhost/phpmyadmin'** in your web browser.
4. Create database **intranet_db**.

      `CREATE DATABASE intranet_db`
    
5. Import database file **'database/intranet_db.sql'** into the newly created database *(intranet_db)*.
6. Goto **'localhost/Intranet-Interface'** in your web browser.

*Lo! Intranet is live..*

## Contributors

<table>
  <td>
        <a href="https://github.com/raoniz">
            <img src="https://github.com/raoniz.png" height=150px width=150px><br>
            Rahul Soni
        </a>
    </td>
    <td>
        <a href="https://github.com/sarvang008">
            <img src="https://github.com/sarvang008.png" height=150px width=150px><br>
            Sarvang Mehta
        </a>
    </td>
    <td>
        <a href="https://github.com/debashree756">
            <img src="https://github.com/debashree756.png" height=150px width=150px><br>
            Debashree Sarkar
        </a>
    </td>
  <td>
        <a href="https://github.com/shah25">
            <img src="https://github.com/shah25.png" height=150px width=150px><br>
            Kaushal Shah
        </a>
    </td>
</table>
