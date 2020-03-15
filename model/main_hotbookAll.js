  let  ob_list_a = {id:"?do=product_book&ob_id=1",
                    img:"bookimg/001.jpg",
                    name:"沉默的遊行",
                    author:"東野圭吾",
                    price:"420"
                  };
  let  ob_list_b = {id:"?do=product_book&ob_id=2",
                    img:"bookimg/002.jpg",
                    name:"天藍色的謀殺案",
                    author:"莎拉．J．哈里斯",
                    price:"420"
                  };
  let  ob_list_c = {id:"?do=product_book&ob_id=3",
                    img:"bookimg/003.jpg",
                    name:"孤宿之人（上下冊．經典回歸版）",
                    author:"宮部美幸	",
                    price:"599"
                  };

  let tr_list_a = {id:"?do=product_book&ob_id=6",
                  img:"bookimg/008-1.jpg",
                  name:"大人絕景旅 京都：世界遺產×京料理×京雜貨，探尋  古都歲時風物詩",
                  author:"朝日新聞出版",
                  price:"360"
                };
  let tr_list_b = {id:"?do=product_book&ob_id=7",
                  img:"bookimg/009.jpg",
                  name:"歐洲從東邊玩：波羅的海三小國、德東、波蘭、捷奧匈金三角，安全×超值×好吃×好玩，小資族也可以輕鬆上路",
                  author:"背包Ken（吳宜謙）",
                  price:"380"
                };
  let tr_list_c = {id:"?do=product_book&ob_id=9",
                  img:"bookimg/no_book_img.jpg",
                  name:"辣椒的世界史：橫跨歐亞非的尋味旅程，一場熱辣過癮的餐桌革命",
                  author:"王恬中",
                  price:"380"
                };


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

      let oblist = ob_list.map(function(list){
        return(
          <div className="col-md-4" key={list.id}>
            <HotbookInface
              id={list.id}
              img={list.img}
              name={list.name}
              author={list.author}
              price={list.price} />
          </div>
        )
      })

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
      let trlist = tr_list.map(function(list){
        return(
          <div className="col-md-4" key={list.id}>
            <HotbookInface
              id={list.id}
              img={list.img}
              name={list.name}
              author={list.author}
              price={list.price} />
          </div>
        )
      })
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
  