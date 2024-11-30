<h1>Add Keyword</h1>
<form method="post" action="">
    <label for="category">Category:</label>
    <input type="text" id="category" name="category" required><br><br>
    <label for="keyword">Keyword:</label>
    <input type="text" id="keyword" name="keyword" required><br><br>
    <input type="submit" value="Add Keyword">
</form>

<style>
    h1 {
        font-family: Arial, sans-serif;
        padding: 10px;
        font-size: 28px;
        color: #000;
        margin-bottom: 20px;
    }

    form {
        background: #d9d9d9;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 500px;
        box-sizing: border-box;
    }

    label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
        color: #000;
    }

    input[type="text"] {
        width: 100%;
        padding: 4px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #28a745;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #218838;
    }
</style>