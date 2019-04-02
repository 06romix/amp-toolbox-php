/**
 * External dependencies
 */
import classnames from 'classnames';

/**
 * WordPress dependencies
 */
import { Component } from '@wordpress/element';
import { withSpokenMessages, Button } from '@wordpress/components';
import { compose, withGlobalEvents } from '@wordpress/compose';
import { ESCAPE, LEFT, RIGHT, ENTER } from '@wordpress/keycodes';
import { __, sprintf } from '@wordpress/i18n';

class RotatableBox extends Component {
	constructor( props ) {
		super( props );

		this.state = {
			isRotating: false,
			angle: props.angle,
		};

		this.onRotateStart = this.onRotateStart.bind( this );
		this.onRotate = this.onRotate.bind( this );
		this.onRotateStop = this.onRotateStop.bind( this );
		this.onKeyUp = this.onKeyUp.bind( this );
	}

	componentDidMount() {
		this.elementRef = document.getElementById( this.props.blockElementId );
	}

	onKeyUp( e ) {
		if ( ! this.state.isRotating ) {
			return;
		}

		e.preventDefault();

		const { keyCode } = e;

		if ( ESCAPE === keyCode ) {
			this.elementRef.classList.remove( 'is-rotating' );
			this.elementRef.style.transform = `rotate(${ this.props.initialAngle }deg)`;

			this.setState(
				{
					isRotating: false,
					angle: this.props.initialAngle,
				},
				() => this.props.onRotateStop && this.props.onRotateStop( e, this.props.initialAngle )
			);
		} else if ( LEFT === keyCode || RIGHT === keyCode ) {
			const angle = LEFT === keyCode ? this.state.angle - 30 : this.state.angle + 30;

			this.elementRef.style.transform = `rotate(${ angle }deg)`;

			/* translators: %s: degrees */
			this.props.speak( sprintf( __( 'Rotating block by %s degrees', 'amp' ), angle ) );

			this.setState(
				{
					angle,
				},
				() => this.props.onRotate && this.props.onRotate( e, angle )
			);
		} else if ( ENTER === keyCode ) {
			/* translators: %s: degrees */
			this.props.speak( sprintf( __( 'Saving block rotation of %s degrees', 'amp' ), this.state.angle ) );

			this.onRotateStop( e );
		}
	}

	onRotateStart( e ) {
		if ( this.state.isRotating ) {
			return;
		}

		if ( ( e.button && 2 === e.button ) || ( e.which && 3 === e.which ) ) {
			return;
		}

		e.preventDefault();

		this.elementRef.classList.add( 'is-rotating' );
		this.elementRef.style.transform = `rotate(${ this.props.angle }deg)`;

		this.setState(
			{
				isRotating: true,
			},
			() => this.props.onRotateStart && this.props.onRotateStart( e )
		);
	}

	onRotate( e ) {
		if ( ! this.state.isRotating ) {
			return;
		}

		e.preventDefault();

		this.elementRef.classList.add( 'is-rotating' );

		const { top, left, width, height } = this.elementRef.getBoundingClientRect();

		const centerX = left + ( width / 2 );
		const centerY = top + ( height / 2 );

		const x = e.clientX - centerX;
		const y = e.clientY - centerY;

		const rad2deg = ( 180 / Math.PI );
		const angle = Math.ceil( -( rad2deg * Math.atan2( x, y ) ) );

		if ( this.state.angle === angle ) {
			return;
		}

		this.elementRef.style.transform = `rotate(${ angle }deg)`;

		this.setState(
			{
				angle,
			},
			() => this.props.onRotate && this.props.onRotate( e, angle )
		);
	}

	onRotateStop( e ) {
		if ( ! this.state.isRotating ) {
			return;
		}

		e.preventDefault();

		this.elementRef.classList.remove( 'is-rotating' );
		this.elementRef.style.transform = `rotate(${ this.state.angle }deg)`;

		this.setState(
			{
				isRotating: false,
			},
			() => this.props.onRotateStop && this.props.onRotateStop( e, this.state.angle )
		);
	}

	render() {
		const className = classnames( this.props.className, { 'is-rotating': this.state.isRotating } );

		return (
			<div
				className={ className }
			>
				<div className="rotatable-box-wrap">
					<Button
						role="switch"
						aria-checked={ this.state.isRotating }
						onMouseDown={ this.onRotateStart }
						className="rotatable-box-wrap__handle"
					>
						<span className="screen-reader-text">
							{ __( 'Rotate Block', 'amp' ) }
						</span>
					</Button>
				</div>
				{ this.props.children }
			</div>
		);
	}
}

export default compose(
	withSpokenMessages,
	withGlobalEvents( {
		mousemove: 'onRotate',
		mouseup: 'onRotateStop',
		keyup: 'onKeyUp',
	} ),
)( RotatableBox );
