import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class SelectType extends JFrame implements ActionListener	{
	JLabel l1;
	JButton b1,b2;
	JMenu help;
	JMenuItem about;
	JFrame fr = new JFrame();
	SelectType()	{
		
		super("Select Type");
		fr.setLayout(new FlowLayout());
		
		Dimension screenSize = Toolkit.getDefaultToolkit().getScreenSize();
		Dimension windowSize = fr.getSize();
		int windowX = Math.max(0, (screenSize.width  - windowSize.width ) / 2);
		int windowY = Math.max(0, (screenSize.height - windowSize.height) / 2);
		
		l1 = new JLabel("Select filetype in which you want to hide your data");
		b1 = new JButton("Image");
		b2 = new JButton("Audio");
		JMenuBar menu = new JMenuBar();
		JMenu help = new JMenu("Help");	help.setMnemonic('H');
		about = new JMenuItem("About"); about.setMnemonic('A'); help.add(about);
		setJMenuBar(menu);
			
		b1.addActionListener(this);
		b2.addActionListener(this);
		
		menu.add(help);
		fr.add(menu);
		fr.add(l1);
		fr.add(b1);	fr.add(b2);
		fr.setLocation(windowX, windowY);
		fr.setSize(350,100);
		fr.setResizable(false);
		fr.setVisible(true);
		fr.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		about.addActionListener(
			new ActionListener(){
				public void actionPerformed(ActionEvent e)
				{
					JFrame fr;
					JLabel aboutinf,aboutinf1,aboutinf2,aboutinf3,aboutinf4,aboutinf5,aboutinf6,aboutinf7;
					aboutinf = new JLabel("Steganography has been developed in java ");
					aboutinf1 = new JLabel("It has been made by");
					aboutinf2 = new JLabel("Dinesh Chimmani"+"          "+"104518177");
					aboutinf3 = new JLabel("Lohith Elisetti"+"         "+"104514421");
					aboutinf4 = new JLabel("Vinod Kholiya"+"       "+"104524927");
					aboutinf5 = new JLabel("for Advanced Software Engoneering");
					aboutinf6 = new JLabel("under guidance of  Ziad Kobti");
					aboutinf7 = new JLabel("All copyrights are reserved to these people............");
					aboutinf.setLocation(4, 8);aboutinf1.setLocation(6, 23);aboutinf2.setLocation(6, 43);aboutinf3.setLocation(6, 58);
					aboutinf4.setLocation(6, 73);aboutinf5.setLocation(6, 90);aboutinf6.setLocation(6, 105);aboutinf7.setLocation(6, 130);
					aboutinf.setSize(300,60); aboutinf1.setSize(300,60); aboutinf2.setSize(350,60);aboutinf3.setSize(350,60);
					aboutinf4.setSize(350,60); aboutinf5.setSize(350,60); aboutinf6.setSize(380,60); aboutinf7.setSize(350,60);
					fr = new JFrame("About");
					fr.add(aboutinf);fr.add(aboutinf1);fr.add(aboutinf2);fr.add(aboutinf3);
					fr.add(aboutinf4);fr.add(aboutinf5);fr.add(aboutinf6);fr.add(aboutinf7);
					Font f = new Font("Dialog", Font.PLAIN, 15);
					aboutinf.setFont(f);aboutinf1.setFont(f);aboutinf2.setFont(f);aboutinf3.setFont(f);
					aboutinf4.setFont(f);aboutinf5.setFont(f);aboutinf6.setFont(f);aboutinf7.setFont(f);
					fr.setSize(400,240);
					fr.setResizable(false);
					fr.setLayout(null);
					fr.setVisible(true);
					fr.setLocation(170,170);
					
				}
			}
		);
	}
	public void actionPerformed(ActionEvent ae)	{
		String cmd = ae.getActionCommand();
		try	{
			if(cmd == "Image")	{
				fr.setVisible(false);
				Runtime.getRuntime().exec(new String[]{"java","-jar","Image/ImageSteg.jar"});
			}
			else	{
				fr.setVisible(false);
				Runtime.getRuntime().exec(new String[]{"java", "-jar", "Audio/AudioSteg.jar"});
			}
			fr.dispose();
		}
		catch(Exception e)	{
		}
	}
	public static void main(String args[])	{
		SelectType st = new SelectType();
	}
}
			
			