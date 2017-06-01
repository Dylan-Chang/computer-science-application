因为要用到递归，所以变量加了&
            
               public function index(){
            $arr = array();
            $item = Department::where('id','=',1)->first();
            /*
            $arr['id'] = $item->id;
            $arr['uuid'] = $item->uuid;
            $arr['title'] = $item->title;
            $arr['description'] = $item->description;
            $data = $this->children($arr);
            */
            return view('department.index', ['department' => $item]);
        }

/*
        public function children(&$data){
            $childrenData = Department::where('parent','=',$data['uuid'])->get();

            if($childrenData){
                $i = 0;
                foreach ($childrenData as $v){
                    //递归加入子项
                    $data['children'][$i]['id'] = $v->id;
                    $data['children'][$i]['uuid'] = $v->uuid;
                    $data['children'][$i]['title'] = $v->title;
                    $data['children'][$i]['description'] = $v->description;

                    $this->children($data['children'][$i]);
                    $i++;
                }

            }
            return $data;
        }*/
            
