<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\User;
use Carbon\Carbon;
class GraphController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function verifay()
    {
        $result = DB::select(DB::raw("select count(*) as total_status,
         verification_status from users group by verification_status;"));

        $chartData="";

        foreach($result as $list){
            $chartData.=" ['".$list->verification_status."',".$list->total_status."],";
        }
        // $chartData=rtrim($chartData,","); //rtrim use for remove the last coma
        $arr['chartData']=rtrim($chartData,",");

        return view('admin.graphs.paichart.verifay',$arr);
    }

    public function maincat(){
        $result2 = DB::select(DB::raw("select count(*) as total_course, 
        m.name from courses as c join main_categories as m on c.main_category_id = m.id group by c.main_category_id"));
        //dd($result2);
        $paichart1="";
        foreach($result2 as $res)
        {
            $paichart1.="['".$res->name."',".$res->total_course."],";
        }
        $array2['paichart1']=rtrim($paichart1,",");

        return view('admin.graphs.paichart.maincat',$array2);
    }

    public function parentcat(){
        $result3 = DB::select(DB::raw("select count(*) as total_parent_course,
        psc.name from courses as c join parent_sub_categories as psc on c.parent_sub_category_id = psc.id group by c.parent_sub_category_id"));
        $piechart3="";
        foreach($result3 as $res3)
        {
            $piechart3.="['".$res3->name."',".$res3->total_parent_course."],";
        }
        $arr3['piechart3']=rtrim($piechart3,",");

        return view('admin.graphs.paichart.parentcat',$arr3);
    }

    public function childcat(){
        $query =DB::select(DB::raw("select count(*) as total_child_course, 
        csc.name from courses as c join child_sub_categories as csc on c.child_sub_category_id = csc.id group by c.child_sub_category_id"));
        //dd($query);
        $childcat="";
        foreach($query as $answer)
        {
            $childcat.="['".$answer->name."',".$answer->total_child_course."],";
        }
        //dd($childcat);
        $array['childcat']=rtrim($childcat,",");
        return view('admin.graphs.paichart.childcat',$array);
    }
   
    // -----------------------------Line Graph------------------------------------------------
    public function parcourse(){
        $result =DB::select(DB::raw("select title,actual_price, sell_price from courses"));
        // dd($result);
        $data="";
        foreach($result as $val){
            $data.="['".$val->title."',".$val->actual_price.",".$val->sell_price."],";
        }
        
       // dd($data);
        return view('admin.graphs.linegraph.subscriptions_per_course',compact('data'));
    }

    public function parmain(){
        $data =DB::select(DB::raw("select name,applicable_to_pq from main_categories group by name;;"));
        //dd($data);
        $main="";
        foreach($data as $cat1)
        {
            $main.="['".$cat1->name."',".$cat1->applicable_to_pq."],";
        }
       // dd($main);
        $arr['main']=rtrim($main,",");
        return view('admin.graphs.linegraph.parmain',$arr);
    }
    public function parparent(){
        $query =DB::select(DB::raw("select name,applicable_to_pq from parent_sub_categories group by name;"));
        $parent="";
        foreach($query as $cat1)
        {
            $parent.="['".$cat1->name."',".$cat1->applicable_to_pq."],";
        }
        //dd($parent);
        $array['parent']=rtrim($parent,",");
        return view('admin.graphs.linegraph.parparent',$array);
    }
    public function parchild(){
        $query =DB::select(DB::raw("select name,applicable_to_pq from child_sub_categories group by name;"));
        $child="";
        foreach($query as $cat1)
        {
            $child.="['".$cat1->name."',".$cat1->applicable_to_pq."],";
        }
        //dd($child);
        $array['child']=rtrim($child,",");
        return view('admin.graphs.linegraph.parchild',$array);
    }

    //colum graph 
    public function activesub(){
        $data =DB::select(DB::raw("SELECT DATE_FORMAT(created_at, '%Y') as year
        , COUNT(IF( Country = 'Ghana', Country, null)) AS Ghana
        , COUNT(IF( Country = 'Liberia', Country, null)) AS Liberia
        , COUNT(IF( Country = 'Nigeria', Country, null)) AS Nigeria
        , COUNT(IF( Country = 'Sierra Leone', Country, null)) AS SierraLeone
        , COUNT(IF( Country = 'The Gambia', Country, null)) AS TheGambia
         FROM users
         GROUP BY YEAR(created_at);"));
        
        $activesub="";

        foreach($data as $result){
            $activesub.="['".$result->year."',".$result->Ghana.",".$result->Liberia.",".$result->Nigeria.",".$result->SierraLeone.",".$result->TheGambia."],";
        }
        // dd($activesub);
        
        //$country="";
        // dd(array_keys($data[0]));
        // $strr = "";
        // for($i=0; $i < COUNT($data); $i++){
        //     if($i < COUNT($data)+1){
        //         $strr .="'".$data[i]->country."'";
        //     } else {
        //         $strr .="'".$data[i]->country."',";
        //     }
        // }    
        // $country = "[".$strr."]";
            
        //         SELECT COUNT(*) as total, EXTRACT(YEAR from created_at) as year, country
        // FROM users 
        // GROUP BY YEAR(created_at), country;


        // $str = "";
        // foreach($data as $res){
        //     $country.="['".$res->country."']";
        
        //     // $country.="['".$res->country."']";
        // //    $country=  str_replace (array('[',']'), '' , $res->country);
        // }
        // $country = "[".$str."]";
        //dd($data[0]);
        //$country = implode(",",$country);
       // dd($country);
       // $arr2['country']=rtrim($country,",");
        $arr['activesub']=rtrim($activesub,",");
       // dd($activesub);
        return view('admin.graphs.columgraph.active_sub',$arr);
    }
    public function instructors(){
        // dd('aa');
        return view('admin.graphs.columgraph.instructors');
    }
    public function colmaincat(){
        $data =DB::select(DB::raw("select name from main_categories group by name;"));
        //dd($data);
        $value=[];
        foreach($data as $val){
            array_push($value,$val->name);
        }
        
       // $aa ="[".implode(",",''.$value.'')."]";
        $values = json_encode(Array_values($value));
       // dd($values);
        //$array['value']=$value;
        return view('admin.graphs.columgraph.child_parent_main',compact('values'));
    }

    //actual price and sell price
    public function linegraph(){
        $result =DB::select(DB::raw("select title,actual_price, sell_price from courses"));
        // dd($result);
        $data="";
        foreach($result as $val){
            $data.="['".$val->title."',".$val->actual_price.",".$val->sell_price."],";
        }
        //dd($data);

       //$user = DB::select(DB::raw("select name,created_at from users"));
        //dd($user);
        //   $data2="";
        //   foreach($user as $val2){
        //       $data2.="['".$val2->name."'],";
        //   }
        //  dd($data2);


        return view('admin.graphs.line_chart',compact('data'));
    }

    //demo purpose
    public function graph(){
      $result =DB::select(DB::raw("select year,sales,Expenses,Profit,loss,bonus from chart"));
     // dd($result);
     $data="";
     foreach($result as $val){
         $data.="['".$val->year."',".$val->sales.",".$val->Expenses.",".$val->Profit.",".$val->loss.",".$val->bonus."],";
     }
    //  dd($data);
    return view('admin.graphs.user_graph',compact('data'));
    }
    
    //use graph 
   public function alluser(){
         // $data = \DB::select(DB::raw("select count(*) as total, DATE_FORMAT(created_at, '%m') as month FROM users GROUP BY MONTH (created_at)  DESC;"));
      // $data = \DB::select(\DB::raw("select count(*) as total, DATE_FORMAT(created_at, '%m') as month FROM users GROUP BY MONTH(created_at) ORDER BY total DESC;"));
        $data = \DB::select(\DB::raw("select count(*) as total , country as courses_as FROM users GROUP BY country ORDER BY country;"));
      // dd($data);
        $user="";
        foreach($data as $answer)
        {
            // dd($answer);
            $user.="['".'Country'.' '.$answer->courses_as."',".$answer->total."],";
        }
        $array['user']=rtrim($user,",");
        // dd($array['user']);
        return view('admin.graphs.paichart.alluser',$array);
    }     
}
