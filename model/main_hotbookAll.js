  let  ob_list_a = ["bookimg/001.jpg",
                    "沉默的遊行",
                    "東野圭吾",
                    "420",
                    "?do=product_book&ob_id=1"
                  ];
  let  ob_list_b = ["bookimg/002.jpg",
                    "天藍色的謀殺案",
                    "莎拉．J．哈里斯",
                    "420",
                    "?do=product_book&ob_id=2"
                  ];
  let  ob_list_c = ["bookimg/003.jpg",
                    "孤宿之人（上下冊．經典回歸版）",
                    "宮部美幸	",
                    "599",
                    "?do=product_book&ob_id=3"
                  ];

  let tr_list_a = ["bookimg/008-1.jpg",
                  "大人絕景旅 京都：世界遺產×京料理×京雜貨，探尋  古都歲時風物詩",
                  "朝日新聞出版",
                  "360",
                  "?do=product_book&ob_id=6"
                ];
  let tr_list_b = ["bookimg/009.jpg",
                  "歐洲從東邊玩：波羅的海三小國、德東、波蘭、捷奧匈金三角，安全×超值×好吃×好玩，小資族也可以輕鬆上路",
                  "背包Ken（吳宜謙）",
                  "380",
                  "?do=product_book&ob_id=7"
                ];
  let tr_list_c = ["bookimg/no_book_img.jpg",
                  "辣椒的世界史：橫跨歐亞非的尋味旅程，一場熱辣過癮的餐桌革命",
                  "王恬中",
                  "380",
                  "?do=product_book&ob_id=9"
                ];


  function HotbookInface(props){
    return(
      <div>
        <a href={props.id}>
          <img src={props.img} className="rounded mx-auto d-block img-thumbnail" width="160px" />
        </a>
        <div>
          <div className="pro_inface_obname">
            <h4 className="ob_name">{props.name}</h4>
          </div>
          <div>
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
            <HotbookInface key = {ob_list[i]} 
              img={ob_list[i][0]}
              name={ob_list[i][1]}
              author={ob_list[i][2]}
              price={ob_list[i][3]}
              id={ob_list[i][4]} />
          </div>);
      }

      return(
        <div className="row">
          {oblist}
        </div>
      )
    }
  }

  class TravelbookAll extends React.Component{
    render(){
      let tr_list=[tr_list_a,tr_list_b,tr_list_c];
      let trlist = [];

      for(let i=0;i<=tr_list.length-1;i++){
        trlist.push(
          <div className="col-md-4">
            <HotbookInface key={tr_list[i]}
              img={tr_list[i][0]}
              name={tr_list[i][1]}
              author={tr_list[i][2]}
              price={tr_list[i][3]}
              id={tr_list[i][4]} />
          </div>);
      }
      return(
        <div className="row">
          {trlist}
        </div>
      )
    }
  }

  ReactDOM.render(
    <HotbookAll />,
    document.getElementById('hotbook')
  );

  ReactDOM.render(
    <TravelbookAll />,
    document.getElementById('travelbook')
  );
  