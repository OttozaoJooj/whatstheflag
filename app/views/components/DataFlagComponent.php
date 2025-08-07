<?php 
foreach($allFlags as $flag){
    echo "
        <tr>
            <th>".$flag['id']."</th>
            <td>".$flag['country_name']."</td>
            <td>".$flag['code']."</td>
            <td>".$flag['flag_filename']."</td>
            <td>".$flag['updated_at']."</td>
            <td>".$flag['created_at']."</td>                    
            <td>".$flag['fk_users']."</td>                                
        </tr>    
    ";
};
