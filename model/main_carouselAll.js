

    let arrLists_a = ['images/newbook_img/banner4-2.jpg',
                    "綠野先蹤",
                    "自從艾薇·羅伯茲的女兒在父親那得到了一個玩偶後，感覺就全變個樣了<br />因此特地請來了名人來解決此事，怎料這事情才正要開始……"
                    ];
    let arrLists_b = ['images/newbook_img/banner1-2.jpg',
                    "解不開的神秘血案",
                    "來自羅伯茲女士的委託，我與偵探老友來到了白銀莊園<br />以女僕上吊開始發生的一連串詭異血案……<br />吾友，這次奇怪的地方太多了，總覺得有人在窺看我們"
                    ];
    let arrLists_c = ['images/newbook_img/banner2-2.jpg',
                    "360小時指考衝",
                    "內附─學長的躲過監考老師72招祕笈<br />重考10年生親身經驗"
                    ];
    let arrLists_d = ['images/newbook_img/banner3-2.jpg',
                    "中國古文108精選（一）",
                    "集結假古文108篇，每篇30小節，每小節都有專人附註詳解<br />共三千頁的豪華大集合"
                    ];

  function CarouselItemActive(props){
    return(
      <div class="carousel-item active">
        <img class="d-block w-100" src={props.newbookimg} alt="First slide" />
        <div class="carousel-caption d-none d-md-block">
          <div class="newbook_div">
            <h5 class="newbook_title">{props.title}</h5>
            <p>{props.content}</p>
          </div>
        </div>
      </div>
    );
  }

  function CarouselItem(props){
    return(
      <div class="carousel-item">
        <img class="d-block w-100" src={props.newbookimg} alt={props.noimg} />
        <div class="carousel-caption d-none d-md-block">
          <div class="newbook_div">
            <h5 class="newbook_title">{props.title}</h5>
            <p>{props.content}</p>
          </div>
        </div>
      </div>
    );
  }

  class CarouselAll extends React.Component{
    render(){
      let arrLists = [arrLists_a,arrLists_b,arrLists_c,arrLists_d];

      let lists = [];

      for(let i=0;i<=arrLists.length-1;i++){
        if(i==0){
          lists.push(<CarouselItemActive newbookimg={arrLists[i][0]} title={arrLists[i][1]} content={arrLists[i][2]} />);
        }else{
          lists.push(<CarouselItem newbookimg={arrLists[i][0]} noimg="newIMG" title={arrLists[i][1]} content={arrLists[i][2]} />);
        }
      }
      return (
        <div>
          {lists}
        </div>
      )
    }
  }

  ReactDOM.render(
    <CarouselAll />,
    document.getElementById('carousel_all')
  );