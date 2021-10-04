<html>

<head>
    <title>Date Of Birth</title>
</head>

<body>
    <form method="get" action="#">
        <fieldset>
            <section>Date Of Birth</section>
            <table>
                <tr>
                    <td align="center">dd</td>
                    <td align="center">mm</td>
                    <td align="center">yyyy</td>
                </tr>
                <tr>
                    <td>
                        <input size="2" type="text" name="day"> /
                    </td>
                    <td>
                        <input size="2" type="text" name="month"> /
                    </td>
                    <td>
                        <input size="4" type="text" name="year">
                    </td>
                </tr>
            </table>
            <hr />
            <input name="submit" type="submit" value="Submit">
            <p>
                <?php
                if (isset($_REQUEST['submit'])) {
                    $day = $_REQUEST['day'];
                    $month = $_REQUEST['month'];
                    $year = $_REQUEST['year'];

                    $date = $day . '/' . $month . '/' . $year;
					
					if($day == "" && $month == "" && $year == "")
					{
						echo "date, month and year can not be empty<br>";
						echo "please try again<br>";
					}
					
					if($day < 1 || $day > 31 || $month < 1 || $month > 12 || $year < 1 || $year > 2021)
					{
						if($day < 1 || $day > 31){
							echo "Invalid day<br>";
						}
						if($month < 1 || $month > 12){
							echo "Invalid month<br>";
						}
						if($year < 1 || $year > 2021){
							echo "Invalid year<br>";
						}
					}
					
					if($day != "" && $month != "" && $year != "" && $day >= 1 && $day <= 31 && $month >= 1 && $month <= 12 && $year > 1953 && $year < 1998)
					{
						echo $date . ' successfully submitted';
					}
                }
                ?>

            </p>
        </fieldset>
    </form>
</body>

</html>