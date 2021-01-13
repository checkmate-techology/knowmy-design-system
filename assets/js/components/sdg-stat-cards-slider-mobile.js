import Glide from '@glidejs/glide/';

const init = function () {
    const $glideExpertiseSection = $('.sdg-stat-cards-slider')

    if($glideExpertiseSection.length){
        const $controlSlider = $glideExpertiseSection.find('.control-slider')
        const numberOfSlides = $glideExpertiseSection.find('.glide__slide').length
        const slideWidth = 100/numberOfSlides;

        $controlSlider.css('width', slideWidth + "%")

        const glideExpertise = new Glide('.sdg-stat-cards-slider', {
            peek: { before: 0, after: 40 }
        });

        glideExpertise.on(['mount.after', 'run'], () => {
            $controlSlider.css('left', (glideExpertise.index*slideWidth) + "%")
        })

        glideExpertise.mount();
    }
}

export default init
