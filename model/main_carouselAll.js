

    let car_Lists_a = {id:"a",
                      clasact:"carousel-item active",
                      img:"images/newbook_img/banner4-3.jpg",
                      title:"綠野先蹤2",
                      content:"自從艾薇·羅伯茲的女兒在父親那得到了一個玩偶後，感覺就全變個樣了\n因此特地請來了名人來解決此事，怎料這事情才正要開始……"
                    };
    let car_Lists_b = {id:"b",
                      clasact:"carousel-item",
                      img:"images/newbook_img/banner1-3.jpg",
                      title:"解不開的神秘血案",
                      content:"來自羅伯茲女士的委託，我與偵探老友來到了白銀莊園\n以女僕上吊開始發生的一連串詭異血案……\n吾友，這次奇怪的地方太多了，總覺得有人在窺看我們"
                    };
    let car_Lists_c = {id:"c",
                      clasact:"carousel-item",
                      img:"images/newbook_img/banner2-3.jpg",
                      title:"360小時指考衝",
                      content:"內附─學長的躲過監考老師72招祕笈\n重考10年生親身經驗"
                    };
    let car_Lists_d = {id:"d",
                      clasact:"carousel-item",
                      img:"images/newbook_img/banner3-3.jpg",
                      title:"中國古文108精選（一）",
                      content:"集結假古文108篇，每篇30小節，每小節都有專人附註詳解\n共三千頁的豪華大集合"
                    };

  function CarouselItem(props){
    return(
      <div className={props.clasact}>
        <img className="d-block w-100" src={props.img} alt="CarouselImg" />
        <div className="carousel-caption d-none d-md-block">
          <div className="newbook_div">
            <h5 className="newbook_title">{props.title}</h5>
            <p className="newbook_content new-line">{props.content}</p>
          </div>
        </div>
      </div>
    );
  }

  class CarouselAll extends React.Component{
    render(){
      let car_Lists = [car_Lists_a,car_Lists_b,car_Lists_c,car_Lists_d];

      let carLists = car_Lists.map(function(lists){
        return(
          <CarouselItem key={lists.id}
            clasact={lists.clasact}
            img={lists.img}
            title={lists.title}
            content={lists.content} />
        )
      })
      return (
        <div>
          {carLists}
        </div>
      )
    }
  }

  ReactDOM.render(
    <CarouselAll />,
    document.getElementById('carousel_all')
  );
