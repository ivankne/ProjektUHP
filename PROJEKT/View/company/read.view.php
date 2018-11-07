<h1>Company/s</h1>

<p style="color: red;">Evo ispisa company-a:</p>

<?php
if (isset($vars['companys'])) {
    $companys = $vars['companys'];
    ?>
    <table>
        <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                Address
            </th>
            <th>
                Email
            </th>
            <th>
                oib
            </th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($companys as $company) {
            ?>
            <tr>
                <td>
                    <?php echo $company->getId(); ?>
                </td>
                <td>
                    <?php echo $company->getName(); ?>
                </td>
                <td>
                    <?php echo $company->getAddress(); ?>
                </td>
                <td>
                    <?php echo $company->getEmail(); ?>
                </td>
                <td>
                    <?php echo $company->getOib(); ?>
                </td>
                <td>
                    <a href="?companyId=<?php echo $company->getId(); ?>">READ</a>
                    <a href="#">UPDATE</a>
                    <a href="#">DELETE</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <?php
} else if (isset($vars['company'])) {
    $company = $vars['company'];
    ?>
    <h3>Single user profile</h3>
    <p>
        Id is: <strong><?php echo $company->getId(); ?></strong><br>
        Name is: <strong><?php echo $company->getName(); ?></strong><br>
        Adress is: <strong><?php echo $company->getAddress(); ?></strong><br>
        Email is: <strong><?php echo $company->getEmail(); ?></strong><br>
        OIB is: <strong><?php echo $company->getOib(); ?></strong><br>
    </p>
<?php
}