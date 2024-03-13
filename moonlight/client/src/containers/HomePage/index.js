import React, { useEffect } from 'react'
import Layout from '../../components/Layout'
import Slideshow from './ImageSlider'
import MidSection from './MidSection'
import Footer from '../../components/Footer'


const HomePage = (props) => {

  return (
    <>
      <Layout />
      <Slideshow/>
      <MidSection/>
    <Footer/>
    </>
  )

}

export default HomePage