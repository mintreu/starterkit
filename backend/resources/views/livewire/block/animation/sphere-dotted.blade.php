@push('style')
    <style>
        canvas {
            width: 100vw;
            height: 100vh;
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            z-index: -9999;
        }
    </style>
@endpush


@push('script')
    <script>
        /**
         * Instantiate Classes
         * Declare Variables
         */
        // ThreeJS
        let scene = new THREE.Scene();
        let parentGroup = animate.getTGroup();
        let resizeGroup = animate.getTGroup();
        // AnimaJS
        let animate = new Anima(scene);


        /**
         * Configure Your Scene
         */
        // Set Camera For Scene
        animate.setCamera(animate.getPerspectiveCamera());
        // Set Custom Div
        animate.setDiv('canvas');
        // Set Scene Background
        animate.hasSceneBgColor(animate.getColor("#00FFFF"));
        //animate.hasSceneBgTexture(animate.getTexture());
        // Resetting And Append
        animate.resetInit();

        /**
         * Prepare Your Scene
         */

        // Set An Event Listener For Window (Object)
        window.addEventListener("resize",animate.windowAutoResize());
        // Build A Sphere With Particles
         animate.makeSphere(animate.getDistance(),animate.getParticles());
        // Set An Event Listener For Document (Object)
        document.addEventListener( 'mousemove', animate.docMouseMoveEventForTween(
            gsap.to(animate.particle.rotation, {duration: 0.1, x: animate.mouseY*-1, y: animate.mouseX})
        ), false );
        // Fill Object Into Group
        parentGroup.add(animate.particle);
        resizeGroup.add(parentGroup);

        /**
         * Add Object Into Scene
         */
        animate.addToScene(resizeGroup);


        /**
         * Build Animation GreenSock
         */
        animate.cameraZ(400);
        animate.animate();
        // animate.help_Color();


        var animProps = {scale: 1,xRot: 0, yRot: 0};
        gsap.to(animProps, {duration: 10, scale: 1.3, repeat: -1, yoyo: true, ease: "sine", onUpdate: function(){
                parentGroup.scale.set(animProps.scale,animProps.scale,animProps.scale);
            }});

        gsap.to(animProps, {duration: 120, xRot: Math.PI * 2, yRot: Math.PI * 4, repeat: -1, yoyo: true, ease: "none", onUpdate: function (){
                parentGroup.rotation.set(animProps.xRot,animProps.yRot,0);
            }});


        // animate.dd( new MouseEvent('mousemove'));




    </script>
@endpush


<div>
    {{-- Load Animation Libs --}}
    <livewire:block.animation.animation />

    <div id="canvas" class="h-20"></div>
</div>



{{--let mintreuAnimation = new MintreuAnimate();--}}
{{--document.addEventListener( 'mousemove', onMouseMove, false );--}}
{{--mintreuAnimation.setCamera();--}}
{{--mintreuAnimation.renderOn('canvas');--}}
{{--mintreuAnimation.setRenderer(); // Optional as run method check it already if not present--}}
{{--mintreuAnimation.run();--}}
