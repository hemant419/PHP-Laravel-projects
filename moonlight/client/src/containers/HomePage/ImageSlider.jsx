import React from 'react';
import SimpleImageSlider from "react-simple-image-slider";

const images = [
    { url: 'https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2021/12/7/53ae79ec-df56-4877-b133-b92f4cfd8c7f1638892785287-EORS-Prebuzz-Banner-DK.gif' },
    { url: 'https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2021/12/11/b96ded76-646c-4baf-9422-7727cbf2b0a11639241779745-Kurtas_Dk.jpg' },
    { url: 'https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2021/12/11/073805e4-f274-4d37-b5e3-8ef4766a19531639241779767-K_Winterwear_Dk.jpg' },
    { url: 'https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2021/12/11/314e5e3a-0ce4-4ab3-90a3-7d02d335dbb21639241779725-Casual-Wear_Desk.jpg'},
];

const Slideshow = () => {
    return (
        <div>
            <SimpleImageSlider
                position = "absolute"
                width= "100%"
                height= {350}
                images={images}
                showBullets={true}
                showNavs={true}
            />
        </div>

    )
}

export default Slideshow;