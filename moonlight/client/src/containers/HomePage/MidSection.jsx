
import React from 'react'
import Card from '../../components/UI/Card';


const MidSection = () => {

    return (
        <>
        <br></br>
            <b style={{
                textTransform: 'uppercase',
                color: '#3e4152',
                letterSpacing: '.15em',
                fontSize: '1.8em',
                margin: '50px 0 10px 30px',
                maxHeight: '5em',
                fontWeight: 500
          }}>Deals Of The Day</b>
                <Card style={{ margin: '5px', dislapy: "flex", justifyContent: 'center',}}>
                    <img style={{
                        width: '20',
                        height: '20',
                    }}
                        src='https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/11/14/6e0a9fa0-9e8d-4c29-9250-995c9f1ba9331605363273176-Home---U.S.-Polo-Assn..jpg'
                    />
                    <img style={{
                        width: '20',
                        height: '20',
                    }}
                        src='https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/8/31/e72c82f2-cfd5-4f9a-b1b0-ba9e2b3e51251598892519506-W.jpg'
                    />
                    {/* <img style={{
                        width: '20',
                        height: '20',
                    }}
                        src='https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/11/14/0524cbd5-f034-4155-9e3b-336c4e530ee41605363272658-Home---Levis.jpg'
                    /> */}
                    <img style={{
                        width: '20',
                        height: '20',
                    }}
                        src='https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/8/31/64ecc170-58af-473f-8144-b1639895a8291598892519457-Veromodo.jpg'
                    />
                    <img style={{
                        width: '20',
                        height: '20',
                    }}
                        src='https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/8/31/af31285e-f6a3-426e-bbea-0aedef9da17c1598892377537-Tommy-Hilfiger.jpg'
                    />
                </Card>
        </>

        
    )
}
export default MidSection;