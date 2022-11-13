<?php
//function that will display when a customer registers
function showRegisterAlert()
{
    if (isset($_GET['register'])) 
    {
        if ($_GET['register'] == 'success') 
        {
            echo "<script> Swal.fire(
            {
                icon: 'success',
                type: 'success',
                title: 'Registration successful',
                text: 'Your account has been registered!'
            }).then(function() 
            {
                window.location.href = '../login/login.php';
            }) </script>";
        } else if ($_GET['register'] == 'error') 
        {
            echo "<script> Swal.fire(
            {
                icon: 'error',
                type: 'error',
                title: 'Registration failed',
                text: 'Your account wasn\'t registered'
            }).then(function() 
            {
                window.location.href = '../login/register.php';
            }) </script>";
        }
    }
}

//function that will display the  pop up when a customer has logged in
function showLoginAlert()
{
    if (isset($_GET['login'])) 
    {
        if ($_GET['login'] == 'success') 
        {
            echo "<script> Swal.fire(
            {
                icon: 'success',
                type: 'success',
                title: 'Login successful',
                text: 'You can proceed to the home page!'
            }).then(function() 
            {
                window.location.href = '../view/home.php';
            }) </script>";
        } else if ($_GET['login'] == 'error') 
        {
            echo "<script> Swal.fire(
            {
                icon: 'error',
                type: 'error',
                title: 'Login failed',
                text: 'Your account isn\'t registered'
            }).then(function() 
            {
                window.location.href = '../login/login.php';
            }) </script>";
        }
    }
}
//function that will display the  pop up when the admin has updated product
function showUpdateAlert()
{
    if (isset($_GET['update'])) 
    {
        if ($_GET['update'] == 'success') 
        {
            echo "<script> Swal.fire(
            {
                icon: 'success',
                type: 'success',
                title: 'Updated successful',
                text: 'The product is updated successfully!'
            }).then(function() 
            {
                window.location.href = 'product.php';
            }) </script>";
        } else if ($_GET['update'] == 'error') 
        {
            echo "<script> Swal.fire(
            {
                icon: 'error',
                type: 'error',
                title: 'Update failed',
                text: 'Product couldn\'t be updated'
            }).then(function() 
            {
                window.location.href = 'product.php';
            }) </script>";
        }
    }
}

//function that will display the  pop up when a customer has sent a concern
function showconcernAlert()
{
    if (isset($_GET['contact'])) 
    {
        if ($_GET['contact'] == 'success') 
        {
            echo "<script> Swal.fire(
            {
                icon: 'success',
                type: 'success',
                title: 'Message sent successfully',
                text: 'Your message has been successfully sent!'
            }).then(function() 
            {
                window.location.href = 'contact.php';
            }) </script>";
        } else if ($_GET['contact'] == 'error') {
            echo "<script> Swal.fire(
            {
                icon: 'error',
                type: 'error',
                title: 'Message failed',
                text: 'Your message could not be sent .Please try again'
            }).then(function() 
            {
                window.location.href = 'contact.php';
            }) </script>";
        }
    }
}