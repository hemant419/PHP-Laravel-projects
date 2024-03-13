import React from "react";
import SimpleReactFooter from "simple-react-footer";

const Footer = () => {
    // render() {
        const description = "Be it clothing, MoonLight offers you the ideal combination of fashion and functionality for men, women and kids. You will realise that the sky is the limit when it comes to the types of outfits that you can purchase for different occasions.";
        const title = "BEST ONLINE SHOPPING SITE IN INDIA FOR FASHION";
        const columns = [
          {
              title: "ONLINE SHOPPING",
              resources: [
                  {
                      name: "Men",

                  },
                  {
                      name: "Women",
                    
                  },
                  {
                      name: "Kids",
                    
                  },
                  {
                      name: "Gift Cards",
                     
                  }
              ]
          },
          {
              title: "Legal",
              resources: [
                  {
                      name: "Privacy",
                      
                  },
                  {
                      name: "Terms",
                  
                  }
              ]
          },
          {
              title: "Visit",
              resources: [
                  {
                      name: "Locations",
                    
                  },
                  {
                      name: "Culture",
                     
                  }
              ]
          }
       ];
       
    // }
    return(
        <>
        <SimpleReactFooter 
          description={description} 
          title={title}
          columns={columns}
          linkedin="fluffy_cat_on_linkedin"
          facebook="fluffy_cat_on_fb"
          twitter="fluffy_cat_on_twitter"
          instagram="fluffy_cat_live"
          youtube="UCFt6TSF464J8K82xeA?"
          pinterest="fluffy_cats_collections"
          copyright="black"
          iconColor="black"
          backgroundColor="bisque"
          fontColor="black"
          copyrightColor="darkgrey"
       />
        </>
        
    )
}


export default Footer;