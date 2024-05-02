<body>
    <header>
        <h1>Al-Mahfuz Chowdhury C3634134</h1>
    </header>
    <section>
<h2>Category Search</h2>
<form method="get" action="results.php">
    <fieldset>
        <legend>
            Search
        </legend>
        <label for="category">Type: </label>
        <select name="category">
            <option value="all">All</option>
            <option value="food">Food</option>
            <option value="stationary">Stationary</option>
            <option value="computer">Computer</option>
            <option value="home">Home</option>
            <option value="clothes">Clothes</option>
        </select>
        <br><br>
        <input type="submit" value="Submit" />
    </fieldset>
</form>
<h2>Open Text Search</h2>
<form method="get" action="results.php">
    <fieldset>
        <legend>
            Search
        </legend>
        <label for="username">Search: </label>
        <input type="text" name="text" />
        <br><br>
        <input type="submit" value="Submit" />
        <input type="reset" value="Clear" />
    </fieldset>
</form>
<h2>Sort</h2>
<form method="get" action="results.php">
    <fieldset>
        <legend>
            Search
        </legend>
        <label>Order By: </label>
        <input type="radio" name="sort" value="alpha">
        <label for="html">A-Z</label>
        <input type="radio" name="sort" value="price">
        <label for="html">Price</label>
        <br><br>
        <input type="submit" value="Submit" />
    </fieldset>
</form>