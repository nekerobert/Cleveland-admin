<?php
    function empty_table_component($span){
        return '<tr>
        <td colspan="'.$span.'" class="empty-table"> <div class="empty-table-wrapper"><i class="fa fa-exclamation-triangle text-danger empty-icon"></i><div>Data not available</div></div></td>
        </tr>';
    }
    
    function pages_table_component($result){
        $str = "";
        $pageCount = 1;
        if(is_bool($result)){
            // No record was retrieve from database
            $str.= empty_table_component(5);

        }elseif(is_array($result)){
            // Only a single record existed;
            $page = $result;
            $str.= '<tr>
                <td>'.$pageCount.'</td>
                <td>'.$page["title"].'</td>
                <td>'.formatted_date($page["date_created"]).'</td>
                <td>
                    <a data-toggle="tooltip" data-placement="top" title="Edit Page" class="btn btn-sm text-white btn-warning" href="'.DASHBOARD_PATH.'pages/'.u($page['id']).'/edit'.'"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                    <a data-toggle="tooltip" data-placement="top" title="Delete Page" class="btn btn-sm text-white btn-danger" href="'.DASHBOARD_PATH.'pages/'.u($page['id']).'/delete'.'"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        ';

        }else{
            // An Object was return
            // Fetch records from the objects
            while($page = mysqli_fetch_assoc($result)){
                // Sanitize data
                $page = sanitize_html($page);
                $str.= '<tr>
                <td>'.$pageCount.'</td>
                <td>'.$page["title"].'</td>
                <td>'.formatted_date($page["date_created"]).'</td>
                <td>
                    <a data-toggle="tooltip" data-placement="top" title="Edit Page" href="'.DASHBOARD_PATH.'pages/'.u($page['id']).'/edit'.'" class="btn btn-sm btn-warning text-white edit-link" ><i class="fa fa-edit"></i></a>
                </td>
                <td>
                <a  data-toggle="modal" data-target="#deletemodal" data-key="'.u($page["id"]).'" class="btn btn-sm btn-danger text-white delete-link"><i class="fa fa-trash"></i></a>
                </td>
                
            </tr>';
            $pageCount++;
            
        }
        
    }
        
   
        return $str;
    }

    function display_delete_modal($data){
       $hiddenEle = isset($_SESSION['csrf_token']) ? "<input type=\"hidden\" name=\"csrf_token\" value=\"".$_SESSION['csrf_token']."\">": csrf_token_tag();
        
       return '<div id="deletemodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deletemodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletemodal">Do you want to delete this '.$data.' ?</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    '.$hiddenEle.'
                </div>
            </div>
        </div>
    </div>
' ;

    }


    function sliders_table_component($result){
        $str = "";
        $pageCount = 1;
        if(is_bool($result)){
            // No record was retrieve from database
            $str.= empty_table_component(8);

        }elseif(is_array($result)){
            $slider = regenerate_with_required(json_to_array($result["content"]), 'primary_title,secondary_title');
            $slider["id"] = $result["id"];
            $slider["date_created"] = $result["date_created"];
            $slider["img"] = full_upload_url($result["path"]);
            // sanitize to avoid xss attack
            $slider = sanitize_html($slider);
            $str.= '<tr>
                <td>'.$pageCount.'</td>
                <td>'.$slider["primary_title"].'</td>
                <td>'.$slider["secondary_title"].'</td>
                <td><img class="img-fluid image-thumbnail" src="'.$slider["img"].'" /></td>
                <td>'.formatted_date($slider["date_created"]).'</td>
                <td>
                    <a data-toggle="tooltip" data-placement="top" title="Edit Slider" class="btn btn-sm btn-warning text-white" href="'.DASHBOARD_PATH.'sliders/'.u($slider['id']).'/edit'.'"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                <a  data-toggle="modal" data-target="#deletemodal" data-key="'.u($slider["id"]).'" class="btn btn-sm text-white btn-danger delete-link"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        ';

        }else{
            // An Object was return
            // Fetch records from the objects
            while($record = mysqli_fetch_assoc($result)){
                $data = json_to_array($record["content"]);
                $slider = regenerate_with_required($data, 'primary_title,secondary_title');
                $slider["id"] = $record["id"];
                $slider["date_created"] = $record["date_created"];
                $slider["img"] = full_upload_url($record["path"]);
                // Sanitize to avoid xss attack
                $slider = sanitize_html($slider);
                $str.= '<tr>
                <td>'.$pageCount.'</td>
                <td>'.$slider["primary_title"].'</td>
                <td>'.$slider["secondary_title"].'</td>
                <td><img class="img-fluid image-thumbnail" src="'.$slider["img"].'"/></td>
                <td>'.formatted_date($slider["date_created"]).'</td>
                <td>
                    <a data-toggle="tooltip" data-placement="top" title="Edit Slider" class="btn btn-sm btn-warning" href="'.DASHBOARD_PATH.'sliders/'.u($slider['id']).'/edit'.'"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                <a  data-toggle="modal" data-target="#deletemodal" data-key="'.u($slider["id"]).'" class="btn btn-sm btn-danger delete-link"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        ';
            $pageCount++;
            
        }
            
        }

        return $str;
        
    }
    
    function tips_table_component($result){
        $str = "";
        $pageCount = 1;
        if(is_bool($result)){
            // No record was retrieve from database
            $str.= empty_table_component(6);

        }elseif(is_array($result)){
            $tip = regenerate_with_required(json_to_array($result["content"]), 'tip_title');
            $tip["id"] = $result["id"];
            $tip["date_created"] = $result["date_created"];
            $tip["img"] = full_upload_url($result["path"]);
            // sanitize to avoid xss attack
            $tip = sanitize_html($tip);
            $str.= '<tr>
                <td>'.$pageCount.'</td>
                <td>'.$tip["tip_title"].'</td>
                <td><img class="img-fluid image-thumbnail" src="'.$tip["img"].'" /></td>
                <td>'.formatted_date($tip["date_created"]).'</td>
                <td>
                    <a data-toggle="tooltip" data-placement="top" title="Edit Health Tip" class="btn btn-sm btn-warning text-dark" href="'.DASHBOARD_PATH.'pages/home/sections/health-tips/'.u($tip['id']).'/edit'.'"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                <a  data-toggle="modal" data-target="#deletemodal" data-key="'.u($tip["id"]).'" class="btn btn-sm text-white btn-danger delete-link"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        ';

        }else{
            // An Object was return
            // Fetch records from the objects
            while($record = mysqli_fetch_assoc($result)){
                $data = json_to_array($record["content"]);
                $tip = regenerate_with_required($data, 'tip_title');
                $tip["id"] = $record["id"];
                $tip["date_created"] = $record["date_created"];
                $tip["img"] = full_upload_url($record["path"]);
                // Sanitize to avoid xss attack
                $tip = sanitize_html($tip);
                $str.= '<tr>
                <td>'.$pageCount.'</td>
                <td>'.$tip["tip_title"].'</td>
                <td><img class="img-fluid image-thumbnail" src="'.$tip["img"].'"/></td>
                <td>'.formatted_date($tip["date_created"]).'</td>
                <td>
                <a data-toggle="tooltip" data-placement="top" title="Edit Health Tip" class="btn btn-sm btn-warning text-dark" href="'.DASHBOARD_PATH.'pages/home/sections/health-tips/'.u($tip['id']).'/edit'.'"><i class="fa fa-edit"></i></a>
            </td>
            <td>
            <a  data-toggle="modal" data-target="#deletemodal" data-key="'.u($tip["id"]).'" class="btn btn-sm text-white btn-danger delete-link"><i class="fa fa-trash"></i></a>
            </td>
            </tr>
        ';
            $pageCount++;
            
        }
            
        }

        return $str;
        
    }

    function items_table_component($result){
        $str = "";
        $pageCount = 1;
        if(is_bool($result)){
            // No record was retrieve from database
            $str.= empty_table_component(6);

        }elseif(is_array($result)){
            $item = regenerate_with_required(json_to_array($result["content"]), 'item_title');
            $item["id"] = $result["id"];
            $item["date_created"] = $result["date_created"];
            $item["img"] = full_upload_url($result["path"]);
            // sanitize to avoid xss attack
            $item = sanitize_html($item);
            $str.= '<tr>
                <td>'.$pageCount.'</td>
                <td>'.$item["item_title"].'</td>
                <td><img class="img-fluid image-thumbnail" src="'.$item["img"].'" /></td>
                <td>'.formatted_date($item["date_created"]).'</td>
                <td>
                    <a data-toggle="tooltip" data-placement="top" title="Edit Health Tip" class="btn btn-sm btn-warning text-dark" href="'.DASHBOARD_PATH.'pages/home/sections/strength-items/'.u($item['id']).'/edit'.'"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                <a  data-toggle="modal" data-target="#deletemodal" data-key="'.u($item["id"]).'" class="btn btn-sm text-white btn-danger delete-link"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        ';

        }else{
            // An Object was return
            // Fetch records from the objects
            while($record = mysqli_fetch_assoc($result)){
                $data = json_to_array($record["content"]);
                $item = regenerate_with_required($data, 'item_title');
                $item["id"] = $record["id"];
                $item["date_created"] = $record["date_created"];
                $item["img"] = full_upload_url($record["path"]);
                // Sanitize to avoid xss attack
                $item = sanitize_html($item);
                $str.= '<tr>
                <td>'.$pageCount.'</td>
                <td>'.$item["item_title"].'</td>
                <td><img class="img-fluid image-thumbnail" src="'.$item["img"].'"/></td>
                <td>'.formatted_date($item["date_created"]).'</td>
                <td>
                <a data-toggle="tooltip" data-placement="top" title="Edit Key Strength" class="btn btn-sm btn-warning text-dark" href="'.DASHBOARD_PATH.'pages/home/sections/strength-items/'.u($item['id']).'/edit'.'"><i class="fa fa-edit"></i></a>
            </td>
            <td>
            <a  data-toggle="modal" data-target="#deletemodal" data-key="'.u($item["id"]).'" class="btn btn-sm text-white btn-danger delete-link"><i class="fa fa-trash"></i></a>
            </td>
            </tr>
        ';
            $pageCount++;
            
        }
            
        }

        return $str;
        
    }

    function equipment_table_component($result){
        $str = "";
        $pageCount = 1;
        if(is_bool($result)){
            // No record was retrieve from database
            $str.= empty_table_component(5);

        }elseif(is_array($result)){
            $item = json_to_array($result["content"]);
            $item["id"] = $result["id"];
            $item["date_created"] = $result["date_created"];
            $item["img"] = full_upload_url($item["path"]);
            // sanitize to avoid xss attack
            $item = sanitize_html($item);
            $str.= '<tr>
                <td>'.$pageCount.'</td>
                <td><img class="img-fluid image-thumbnail" src="'.$item["img"].'" /></td>
                <td>'.formatted_date($item["date_created"]).'</td>
                <td>
                    <a data-toggle="tooltip" data-placement="top" title="Update Equipment Image" class="btn btn-sm btn-warning text-dark" href="'.DASHBOARD_PATH.'pages/home/sections/equipments/'.u($item['id']).'/edit'.'"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                <a  data-toggle="modal" data-target="#deletemodal" data-key="'.u($item["id"]).'" class="btn btn-sm text-white btn-danger delete-link"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        ';

        }else{
            // An Object was return
            // Fetch records from the objects
            while($record = mysqli_fetch_assoc($result)){
                $item = json_to_array($record["content"]);
                $item["id"] = $record["id"];
                $item["date_created"] = $record["date_created"];
                $item["img"] = full_upload_url($item["path"]);
                // Sanitize to avoid xss attack
                $item = sanitize_html($item);
                $str.= '<tr>
                <td>'.$pageCount.'</td>
                <td><img class="img-fluid image-thumbnail" src="'.$item["img"].'" /></td>
                <td>'.formatted_date($item["date_created"]).'</td>
                <td>
                    <a data-toggle="tooltip" data-placement="top" title="Update Equipment Image" class="btn btn-sm btn-warning text-dark" href="'.DASHBOARD_PATH.'pages/home/sections/equipment-items/'.u($item['id']).'/edit'.'"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                <a  data-toggle="modal" data-target="#deletemodal" data-key="'.u($item["id"]).'" class="btn btn-sm text-white btn-danger delete-link"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        ';
            $pageCount++;
            
        }
            
        }

        return $str;
        
    }

    

?>