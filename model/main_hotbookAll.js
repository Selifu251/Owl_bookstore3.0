  let  ob_list_a = ["bookimg/001.jpg",
                    "沉默的遊行",
                    "東野圭吾",
                    "420"
                  ];
  let  ob_list_b = ["bookimg/002.jpg",
                    "天藍色的謀殺案",
                    "莎拉．J．哈里斯",
                    "420"
                  ];
  let  ob_list_c = ["bookimg/003.jpg",
                    "孤宿之人（上下冊．經典回歸版）",
                    "宮部美幸	",
                    "599"
                  ];

  function HotbookInface(props){
    return(
      <div className="pro_inface">
        <a href="#">
          <img src={props.img} className="rounded mx-auto d-block img-thumbnail" width="160px" />
        </a>
        <div>
          <div className="pro_inface_obname">
            <h4 className="ob_name">{props.name}</h4>
          </div>
          <div className="pro_inface_obauthor">
            <p>作者：<span className="ob_author">{props.author}</span></p>
          </div>
          <p>價格：<span className="ob_price">{props.price}</span></p>
          <button className="btn btn-warning pro_inface_btn">
            加入購物車
          </button>
        </div>
      </div>
    );
  }

  class HotbookAll extends React.Component{
    render(){
      let ob_list = [ob_list_a,ob_list_b,ob_list_c];

      let oblist = [];

      for(let i=0;i<=ob_list.length-1;i++){
        oblist.push(
          <div className="col-md-4">
            <HotbookInface
              img={ob_list[i][0]}
              name={ob_list[i][1]}
              author={ob_list[i][2]}
              price={ob_list[i][3]} />
          </div>);
      }

      return(
        <div className="row">
          {oblist}
        </div>
      )
    }
  }


  ReactDOM.render(
    <HotbookAll />,
    document.getElementById('hotbook')
  );