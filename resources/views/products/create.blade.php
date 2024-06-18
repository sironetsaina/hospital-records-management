@extends('products.layout')
<head>
<style>
        /* Ensure the body and html take full height */
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        /* Container for the main content to push footer to the bottom */
        .content {
            flex: 1;
        }

        /* Custom styles for navigation buttons */
        .nav-buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px;
            background-color: #f8f9fa;
        }

        .nav-buttons .row {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-bottom: 10px;
        }

        .nav-buttons a {
            text-decoration: none;
            padding: 20px 20px;
            background-color: #007bff;
            color: white;
            border-radius: 10px;
            margin: 0 10px;
            transition: background-color 0.3s;
        }

        .nav-buttons a:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>


   





